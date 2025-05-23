<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1024, 6144> $MemorySizeInMB
 * @property int<1, 200> $MaxConcurrency
 * @property int<1, 200>|null $ProvisionedConcurrency
 */
class ProductionVariantServerlessConfig extends Shape
{
    /**
     * @param array{
     *     MemorySizeInMB: int<1024, 6144>,
     *     MaxConcurrency: int<1, 200>,
     *     ProvisionedConcurrency?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
