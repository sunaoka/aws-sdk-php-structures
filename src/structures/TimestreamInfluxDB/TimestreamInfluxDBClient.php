<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB;

class TimestreamInfluxDBClient extends \Aws\TimestreamInfluxDB\TimestreamInfluxDBClient
{
    use CreateDbInstance\CreateDbInstanceTrait;
    use CreateDbParameterGroup\CreateDbParameterGroupTrait;
    use DeleteDbInstance\DeleteDbInstanceTrait;
    use GetDbInstance\GetDbInstanceTrait;
    use GetDbParameterGroup\GetDbParameterGroupTrait;
    use ListDbInstances\ListDbInstancesTrait;
    use ListDbParameterGroups\ListDbParameterGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDbInstance\UpdateDbInstanceTrait;
}
