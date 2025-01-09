<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MemorySizeInMB
 * @property int $MaxConcurrency
 * @property int $ProvisionedConcurrency
 */
class ProductionVariantServerlessConfig extends Shape
{
    /**
     * @param array{
     *     MemorySizeInMB: int,
     *     MaxConcurrency: int,
     *     ProvisionedConcurrency?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
