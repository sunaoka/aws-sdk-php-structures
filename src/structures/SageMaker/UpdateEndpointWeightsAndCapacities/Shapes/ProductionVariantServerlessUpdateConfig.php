<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpointWeightsAndCapacities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxConcurrency
 * @property int $ProvisionedConcurrency
 */
class ProductionVariantServerlessUpdateConfig extends Shape
{
    /**
     * @param array{
     *     MaxConcurrency?: int,
     *     ProvisionedConcurrency?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
