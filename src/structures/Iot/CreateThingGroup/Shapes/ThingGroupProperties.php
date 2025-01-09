<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thingGroupDescription
 * @property AttributePayload $attributePayload
 */
class ThingGroupProperties extends Shape
{
    /**
     * @param array{
     *     thingGroupDescription?: string,
     *     attributePayload?: AttributePayload
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
