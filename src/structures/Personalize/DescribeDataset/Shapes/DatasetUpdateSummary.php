<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $schemaArn
 * @property string|null $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class DatasetUpdateSummary extends Shape
{
    /**
     * @param array{
     *     schemaArn?: string|null,
     *     status?: string|null,
     *     failureReason?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
