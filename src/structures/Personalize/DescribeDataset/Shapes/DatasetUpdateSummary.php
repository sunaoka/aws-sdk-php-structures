<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $schemaArn
 * @property string $status
 * @property string $failureReason
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class DatasetUpdateSummary extends Shape
{
    /**
     * @param array{
     *     schemaArn?: string,
     *     status?: string,
     *     failureReason?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
