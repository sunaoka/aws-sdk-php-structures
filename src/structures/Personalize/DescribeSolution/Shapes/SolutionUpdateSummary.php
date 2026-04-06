<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SolutionUpdateConfig|null $solutionUpdateConfig
 * @property string|null $status
 * @property bool|null $performAutoTraining
 * @property bool|null $performIncrementalUpdate
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 */
class SolutionUpdateSummary extends Shape
{
    /**
     * @param array{
     *     solutionUpdateConfig?: SolutionUpdateConfig|null,
     *     status?: string|null,
     *     performAutoTraining?: bool|null,
     *     performIncrementalUpdate?: bool|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
