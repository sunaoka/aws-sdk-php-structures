<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'DATASET' $sourceType
 * @property string $sourceName
 * @property DataIntegrationFlowS3SourceConfiguration $s3Source
 * @property DataIntegrationFlowDatasetSourceConfiguration $datasetSource
 */
class DataIntegrationFlowSource extends Shape
{
    /**
     * @param array{
     *     sourceType: 'S3'|'DATASET',
     *     sourceName: string,
     *     s3Source?: DataIntegrationFlowS3SourceConfiguration,
     *     datasetSource?: DataIntegrationFlowDatasetSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
