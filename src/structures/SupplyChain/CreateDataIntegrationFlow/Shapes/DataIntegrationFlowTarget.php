<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'DATASET' $targetType
 * @property DataIntegrationFlowS3TargetConfiguration|null $s3Target
 * @property DataIntegrationFlowDatasetTargetConfiguration|null $datasetTarget
 */
class DataIntegrationFlowTarget extends Shape
{
    /**
     * @param array{
     *     targetType: 'S3'|'DATASET',
     *     s3Target?: DataIntegrationFlowS3TargetConfiguration|null,
     *     datasetTarget?: DataIntegrationFlowDatasetTargetConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
