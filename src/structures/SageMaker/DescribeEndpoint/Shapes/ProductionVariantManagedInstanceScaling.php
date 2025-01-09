<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property int<0, max> $MinInstanceCount
 * @property int<1, max> $MaxInstanceCount
 */
class ProductionVariantManagedInstanceScaling extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED',
     *     MinInstanceCount?: int<0, max>,
     *     MaxInstanceCount?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
