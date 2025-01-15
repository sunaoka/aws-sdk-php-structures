<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDynamicThingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thingGroupDescription
 * @property AttributePayload|null $attributePayload
 */
class ThingGroupProperties extends Shape
{
    /**
     * @param array{
     *     thingGroupDescription?: string|null,
     *     attributePayload?: AttributePayload|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
