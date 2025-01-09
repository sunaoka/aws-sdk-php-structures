<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchSegmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobName
 * @property string $batchSegmentJobArn
 * @property string $filterArn
 * @property string $failureReason
 * @property string $solutionVersionArn
 * @property int $numResults
 * @property BatchSegmentJobInput $jobInput
 * @property BatchSegmentJobOutput $jobOutput
 * @property string $roleArn
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class BatchSegmentJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string,
     *     batchSegmentJobArn?: string,
     *     filterArn?: string,
     *     failureReason?: string,
     *     solutionVersionArn?: string,
     *     numResults?: int,
     *     jobInput?: BatchSegmentJobInput,
     *     jobOutput?: BatchSegmentJobOutput,
     *     roleArn?: string,
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
