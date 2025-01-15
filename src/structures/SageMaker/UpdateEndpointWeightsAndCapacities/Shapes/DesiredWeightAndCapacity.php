<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpointWeightsAndCapacities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VariantName
 * @property float|null $DesiredWeight
 * @property int<0, max>|null $DesiredInstanceCount
 * @property ProductionVariantServerlessUpdateConfig|null $ServerlessUpdateConfig
 */
class DesiredWeightAndCapacity extends Shape
{
    /**
     * @param array{
     *     VariantName: string,
     *     DesiredWeight?: float|null,
     *     DesiredInstanceCount?: int<0, max>|null,
     *     ServerlessUpdateConfig?: ProductionVariantServerlessUpdateConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
