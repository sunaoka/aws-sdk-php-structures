<?php

namespace Sunaoka\Aws\Structures\Personalize\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $filterArn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $datasetGroupArn
 * @property string $failureReason
 * @property string $status
 */
class FilterSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     filterArn?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     datasetGroupArn?: string,
     *     failureReason?: string,
     *     status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
