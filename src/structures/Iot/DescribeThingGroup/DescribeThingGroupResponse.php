<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $thingGroupName
 * @property string $thingGroupId
 * @property string $thingGroupArn
 * @property int $version
 * @property Shapes\ThingGroupProperties $thingGroupProperties
 * @property Shapes\ThingGroupMetadata $thingGroupMetadata
 * @property string $indexName
 * @property string $queryString
 * @property string $queryVersion
 * @property 'ACTIVE'|'BUILDING'|'REBUILDING' $status
 */
class DescribeThingGroupResponse extends Response
{
}
