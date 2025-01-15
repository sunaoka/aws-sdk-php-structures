<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $datasetArn
 * @property string|null $datasetGroupArn
 * @property string|null $datasetType
 * @property string|null $schemaArn
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property DatasetUpdateSummary|null $latestDatasetUpdate
 * @property string|null $trackingId
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     datasetArn?: string|null,
     *     datasetGroupArn?: string|null,
     *     datasetType?: string|null,
     *     schemaArn?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     latestDatasetUpdate?: DatasetUpdateSummary|null,
     *     trackingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
