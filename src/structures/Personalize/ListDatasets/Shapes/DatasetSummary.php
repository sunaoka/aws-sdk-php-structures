<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $datasetArn
 * @property string $datasetType
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     datasetArn?: string,
     *     datasetType?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
