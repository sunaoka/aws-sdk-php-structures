<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'DATASET' $sourceType
 * @property DataIntegrationFlowS3Source|null $s3Source
 * @property DataIntegrationFlowDatasetSource|null $datasetSource
 */
class DataIntegrationFlowExecutionSourceInfo extends Shape
{
    /**
     * @param array{
     *     sourceType: 'S3'|'DATASET',
     *     s3Source?: DataIntegrationFlowS3Source|null,
     *     datasetSource?: DataIntegrationFlowDatasetSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
