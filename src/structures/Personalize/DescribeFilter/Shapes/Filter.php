<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $filterArn
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $datasetGroupArn
 * @property string|null $failureReason
 * @property string|null $filterExpression
 * @property string|null $status
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     filterArn?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     datasetGroupArn?: string|null,
     *     failureReason?: string|null,
     *     filterExpression?: string|null,
     *     status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
