<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'DATASET' $sourceType
 * @property string $sourceName
 * @property DataIntegrationFlowS3SourceConfiguration|null $s3Source
 * @property DataIntegrationFlowDatasetSourceConfiguration|null $datasetSource
 */
class DataIntegrationFlowSource extends Shape
{
    /**
     * @param array{
     *     sourceType: 'S3'|'DATASET',
     *     sourceName: string,
     *     s3Source?: DataIntegrationFlowS3SourceConfiguration|null,
     *     datasetSource?: DataIntegrationFlowDatasetSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
