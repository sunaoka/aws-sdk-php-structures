<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $VariantName
 * @property ModelInfrastructureConfig $InfrastructureConfig
 */
class ModelVariantConfig extends Shape
{
    /**
     * @param array{
     *     ModelName: string,
     *     VariantName: string,
     *     InfrastructureConfig: ModelInfrastructureConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
