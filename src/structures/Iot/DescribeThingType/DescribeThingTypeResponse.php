<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $thingTypeName
 * @property string $thingTypeId
 * @property string $thingTypeArn
 * @property Shapes\ThingTypeProperties $thingTypeProperties
 * @property Shapes\ThingTypeMetadata $thingTypeMetadata
 */
class DescribeThingTypeResponse extends Response
{
}
