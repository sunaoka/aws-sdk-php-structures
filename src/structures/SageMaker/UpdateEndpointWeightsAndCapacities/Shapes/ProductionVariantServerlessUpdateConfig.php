<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpointWeightsAndCapacities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 200> $MaxConcurrency
 * @property int<1, 200> $ProvisionedConcurrency
 */
class ProductionVariantServerlessUpdateConfig extends Shape
{
    /**
     * @param array{
     *     MaxConcurrency?: int<1, 200>,
     *     ProvisionedConcurrency?: int<1, 200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
