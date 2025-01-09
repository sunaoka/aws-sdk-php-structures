<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $VariantName
 * @property ModelInfrastructureConfig $InfrastructureConfig
 * @property 'Creating'|'Updating'|'InService'|'Deleting'|'Deleted' $Status
 */
class ModelVariantConfigSummary extends Shape
{
    /**
     * @param array{
     *     ModelName: string,
     *     VariantName: string,
     *     InfrastructureConfig: ModelInfrastructureConfig,
     *     Status: 'Creating'|'Updating'|'InService'|'Deleting'|'Deleted'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
