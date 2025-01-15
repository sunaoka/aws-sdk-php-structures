<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $solutionVersionArn
 * @property string|null $status
 * @property 'FULL'|'UPDATE'|'AUTOTRAIN'|null $trainingMode
 * @property 'AUTOMATIC'|'MANUAL'|null $trainingType
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 */
class SolutionVersionSummary extends Shape
{
    /**
     * @param array{
     *     solutionVersionArn?: string|null,
     *     status?: string|null,
     *     trainingMode?: 'FULL'|'UPDATE'|'AUTOTRAIN'|null,
     *     trainingType?: 'AUTOMATIC'|'MANUAL'|null,
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
