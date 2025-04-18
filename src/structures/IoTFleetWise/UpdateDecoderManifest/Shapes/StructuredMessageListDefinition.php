<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property StructuredMessage $memberType
 * @property 'FIXED_CAPACITY'|'DYNAMIC_UNBOUNDED_CAPACITY'|'DYNAMIC_BOUNDED_CAPACITY' $listType
 * @property int<0, 2147483647>|null $capacity
 */
class StructuredMessageListDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     memberType: StructuredMessage,
     *     listType: 'FIXED_CAPACITY'|'DYNAMIC_UNBOUNDED_CAPACITY'|'DYNAMIC_BOUNDED_CAPACITY',
     *     capacity?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
