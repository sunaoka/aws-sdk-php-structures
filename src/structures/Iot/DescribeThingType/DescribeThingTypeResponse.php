<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $thingTypeName
 * @property string|null $thingTypeId
 * @property string|null $thingTypeArn
 * @property Shapes\ThingTypeProperties|null $thingTypeProperties
 * @property Shapes\ThingTypeMetadata|null $thingTypeMetadata
 */
class DescribeThingTypeResponse extends Response
{
}
