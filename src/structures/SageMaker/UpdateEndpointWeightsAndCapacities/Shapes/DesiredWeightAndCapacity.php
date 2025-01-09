<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpointWeightsAndCapacities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VariantName
 * @property float $DesiredWeight
 * @property int $DesiredInstanceCount
 * @property ProductionVariantServerlessUpdateConfig $ServerlessUpdateConfig
 */
class DesiredWeightAndCapacity extends Shape
{
    /**
     * @param array{
     *     VariantName: string,
     *     DesiredWeight?: float,
     *     DesiredInstanceCount?: int,
     *     ServerlessUpdateConfig?: ProductionVariantServerlessUpdateConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
