<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $datasetArn
 * @property string $datasetGroupArn
 * @property string $datasetType
 * @property string $schemaArn
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property DatasetUpdateSummary $latestDatasetUpdate
 * @property string $trackingId
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     datasetArn?: string,
     *     datasetGroupArn?: string,
     *     datasetType?: string,
     *     schemaArn?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     latestDatasetUpdate?: DatasetUpdateSummary,
     *     trackingId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
