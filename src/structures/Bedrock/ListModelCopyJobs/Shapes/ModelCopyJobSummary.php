<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCopyJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $targetModelArn
 * @property string $targetModelName
 * @property string $sourceAccountId
 * @property string $sourceModelArn
 * @property string $targetModelKmsKeyArn
 * @property list<Tag> $targetModelTags
 * @property string $failureMessage
 * @property string $sourceModelName
 */
class ModelCopyJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     status: 'InProgress'|'Completed'|'Failed',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     targetModelArn: string,
     *     targetModelName?: string,
     *     sourceAccountId: string,
     *     sourceModelArn: string,
     *     targetModelKmsKeyArn?: string,
     *     targetModelTags?: list<Tag>,
     *     failureMessage?: string,
     *     sourceModelName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
