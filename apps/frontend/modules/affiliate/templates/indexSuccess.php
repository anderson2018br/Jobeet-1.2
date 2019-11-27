<h1>Affiliate List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Url</th>
      <th>Email</th>
      <th>Token</th>
      <th>Is active</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_affiliate_list as $jobeet_affiliate): ?>
    <tr>
      <td><a href="<?php echo url_for('affiliate/edit?id='.$jobeet_affiliate['id']) ?>"><?php echo $jobeet_affiliate->getid() ?></a></td>
      <td><?php echo $jobeet_affiliate->geturl() ?></td>
      <td><?php echo $jobeet_affiliate->getemail() ?></td>
      <td><?php echo $jobeet_affiliate->gettoken() ?></td>
      <td><?php echo $jobeet_affiliate->getis_active() ?></td>
      <td><?php echo $jobeet_affiliate->getcreated_at() ?></td>
      <td><?php echo $jobeet_affiliate->getupdated_at() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('affiliate/new') ?>">New</a>
