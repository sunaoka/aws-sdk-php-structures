<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SolutionUpdateConfig $solutionUpdateConfig
 * @property string $status
 * @property bool $performAutoTraining
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 */
class SolutionUpdateSummary extends Shape
{
    /**
     * @param array{
     *     solutionUpdateConfig?: SolutionUpdateConfig,
     *     status?: string,
     *     performAutoTraining?: bool,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
