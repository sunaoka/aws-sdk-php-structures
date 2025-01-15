<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCopyJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $targetModelArn
 * @property string|null $targetModelName
 * @property string $sourceAccountId
 * @property string $sourceModelArn
 * @property string|null $targetModelKmsKeyArn
 * @property list<Tag>|null $targetModelTags
 * @property string|null $failureMessage
 * @property string|null $sourceModelName
 */
class ModelCopyJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     status: 'InProgress'|'Completed'|'Failed',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     targetModelArn: string,
     *     targetModelName?: string|null,
     *     sourceAccountId: string,
     *     sourceModelArn: string,
     *     targetModelKmsKeyArn?: string|null,
     *     targetModelTags?: list<Tag>|null,
     *     failureMessage?: string|null,
     *     sourceModelName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
