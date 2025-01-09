<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingTypeName
 * @property string $thingTypeArn
 * @property ThingTypeProperties $thingTypeProperties
 * @property ThingTypeMetadata $thingTypeMetadata
 */
class ThingTypeDefinition extends Shape
{
    /**
     * @param array{
     *     thingTypeName?: string,
     *     thingTypeArn?: string,
     *     thingTypeProperties?: ThingTypeProperties,
     *     thingTypeMetadata?: ThingTypeMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
