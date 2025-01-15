<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $importedModelArn
 * @property string|null $importedModelName
 */
class ModelImportJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobName: string,
     *     status: 'InProgress'|'Completed'|'Failed',
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     importedModelArn?: string|null,
     *     importedModelName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
