<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchSegmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobName
 * @property string|null $batchSegmentJobArn
 * @property string|null $filterArn
 * @property string|null $failureReason
 * @property string|null $solutionVersionArn
 * @property int|null $numResults
 * @property BatchSegmentJobInput|null $jobInput
 * @property BatchSegmentJobOutput|null $jobOutput
 * @property string|null $roleArn
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class BatchSegmentJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string|null,
     *     batchSegmentJobArn?: string|null,
     *     filterArn?: string|null,
     *     failureReason?: string|null,
     *     solutionVersionArn?: string|null,
     *     numResults?: int|null,
     *     jobInput?: BatchSegmentJobInput|null,
     *     jobOutput?: BatchSegmentJobOutput|null,
     *     roleArn?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
