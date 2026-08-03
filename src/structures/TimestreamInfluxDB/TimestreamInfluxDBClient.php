<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB;

class TimestreamInfluxDBClient extends \Aws\TimestreamInfluxDB\TimestreamInfluxDBClient
{
    use CreateDbBackup\CreateDbBackupTrait;
    use CreateDbCluster\CreateDbClusterTrait;
    use CreateDbInstance\CreateDbInstanceTrait;
    use CreateDbParameterGroup\CreateDbParameterGroupTrait;
    use DeleteDbBackup\DeleteDbBackupTrait;
    use DeleteDbCluster\DeleteDbClusterTrait;
    use DeleteDbInstance\DeleteDbInstanceTrait;
    use GetDbBackup\GetDbBackupTrait;
    use GetDbCluster\GetDbClusterTrait;
    use GetDbInstance\GetDbInstanceTrait;
    use GetDbParameterGroup\GetDbParameterGroupTrait;
    use ListDbBackups\ListDbBackupsTrait;
    use ListDbClusters\ListDbClustersTrait;
    use ListDbInstances\ListDbInstancesTrait;
    use ListDbInstancesForCluster\ListDbInstancesForClusterTrait;
    use ListDbParameterGroups\ListDbParameterGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RebootDbCluster\RebootDbClusterTrait;
    use RebootDbInstance\RebootDbInstanceTrait;
    use RestoreFromDbBackup\RestoreFromDbBackupTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDbCluster\UpdateDbClusterTrait;
    use UpdateDbInstance\UpdateDbInstanceTrait;
}
