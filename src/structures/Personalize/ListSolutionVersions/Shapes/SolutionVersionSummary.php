<?php

namespace Sunaoka\Aws\Structures\Personalize\ListSolutionVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $solutionVersionArn
 * @property string $status
 * @property 'FULL'|'UPDATE'|'AUTOTRAIN' $trainingMode
 * @property 'AUTOMATIC'|'MANUAL' $trainingType
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 */
class SolutionVersionSummary extends Shape
{
    /**
     * @param array{
     *     solutionVersionArn?: string,
     *     status?: string,
     *     trainingMode?: 'FULL'|'UPDATE'|'AUTOTRAIN',
     *     trainingType?: 'AUTOMATIC'|'MANUAL',
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
