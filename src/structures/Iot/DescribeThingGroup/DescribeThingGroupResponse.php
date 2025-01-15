<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $thingGroupName
 * @property string|null $thingGroupId
 * @property string|null $thingGroupArn
 * @property int|null $version
 * @property Shapes\ThingGroupProperties|null $thingGroupProperties
 * @property Shapes\ThingGroupMetadata|null $thingGroupMetadata
 * @property string|null $indexName
 * @property string|null $queryString
 * @property string|null $queryVersion
 * @property 'ACTIVE'|'BUILDING'|'REBUILDING'|null $status
 */
class DescribeThingGroupResponse extends Response
{
}
