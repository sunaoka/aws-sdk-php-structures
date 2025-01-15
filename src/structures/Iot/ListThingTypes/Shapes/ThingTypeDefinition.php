<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingTypeName
 * @property string|null $thingTypeArn
 * @property ThingTypeProperties|null $thingTypeProperties
 * @property ThingTypeMetadata|null $thingTypeMetadata
 */
class ThingTypeDefinition extends Shape
{
    /**
     * @param array{
     *     thingTypeName?: string|null,
     *     thingTypeArn?: string|null,
     *     thingTypeProperties?: ThingTypeProperties|null,
     *     thingTypeMetadata?: ThingTypeMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
