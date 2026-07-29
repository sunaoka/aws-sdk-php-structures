<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'KENDRA'|'SITEWISE'|null $sourceType
 * @property 'SESSION'|'CURATED'|'EXTERNAL'|null $datasetType
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 * @property DatasetStatus $status
 * @property DatasetEnrichment|null $enrichmentStatus
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     description: string,
     *     sourceType?: 'KENDRA'|'SITEWISE'|null,
     *     datasetType?: 'SESSION'|'CURATED'|'EXTERNAL'|null,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     lastUpdateDate: \Aws\Api\DateTimeResult,
     *     status: DatasetStatus,
     *     enrichmentStatus?: DatasetEnrichment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
