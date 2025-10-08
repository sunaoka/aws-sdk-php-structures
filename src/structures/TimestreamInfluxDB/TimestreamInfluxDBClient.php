<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB;

class TimestreamInfluxDBClient extends \Aws\TimestreamInfluxDB\TimestreamInfluxDBClient
{
    use CreateDbCluster\CreateDbClusterTrait;
    use CreateDbInstance\CreateDbInstanceTrait;
    use CreateDbParameterGroup\CreateDbParameterGroupTrait;
    use DeleteDbCluster\DeleteDbClusterTrait;
    use DeleteDbInstance\DeleteDbInstanceTrait;
    use GetDbCluster\GetDbClusterTrait;
    use GetDbInstance\GetDbInstanceTrait;
    use GetDbParameterGroup\GetDbParameterGroupTrait;
    use ListDbClusters\ListDbClustersTrait;
    use ListDbInstances\ListDbInstancesTrait;
    use ListDbInstancesForCluster\ListDbInstancesForClusterTrait;
    use ListDbParameterGroups\ListDbParameterGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDbCluster\UpdateDbClusterTrait;
    use UpdateDbInstance\UpdateDbInstanceTrait;
}
