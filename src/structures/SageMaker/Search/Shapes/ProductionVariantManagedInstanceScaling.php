<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property int<0, max>|null $MinInstanceCount
 * @property int<1, max>|null $MaxInstanceCount
 */
class ProductionVariantManagedInstanceScaling extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     MinInstanceCount?: int<0, max>|null,
     *     MaxInstanceCount?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
