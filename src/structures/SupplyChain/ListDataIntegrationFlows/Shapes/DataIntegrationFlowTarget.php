<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'DATASET' $targetType
 * @property DataIntegrationFlowS3TargetConfiguration $s3Target
 * @property DataIntegrationFlowDatasetTargetConfiguration $datasetTarget
 */
class DataIntegrationFlowTarget extends Shape
{
    /**
     * @param array{
     *     targetType: 'S3'|'DATASET',
     *     s3Target?: DataIntegrationFlowS3TargetConfiguration,
     *     datasetTarget?: DataIntegrationFlowDatasetTargetConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
