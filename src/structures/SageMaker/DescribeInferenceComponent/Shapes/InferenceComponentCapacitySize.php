<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COPY_COUNT'|'CAPACITY_PERCENT' $Type
 * @property int<1, max> $Value
 */
class InferenceComponentCapacitySize extends Shape
{
    /**
     * @param array{
     *     Type: 'COPY_COUNT'|'CAPACITY_PERCENT',
     *     Value: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
