<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property 'InProgress'|'Completed'|'Failed' $status
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $importedModelArn
 * @property string $importedModelName
 */
class ModelImportJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobName: string,
     *     status: 'InProgress'|'Completed'|'Failed',
     *     lastModifiedTime?: \Aws\Api\DateTimeResult,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     importedModelArn?: string,
     *     importedModelName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
