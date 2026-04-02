<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraryIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $jobStatus
 * @property 'VOCABULARY' $entityType
 * @property 'UPSERT'|'DELETE' $operationType
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $completionTime
 */
class DataAutomationLibraryIngestionJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobStatus: 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED',
     *     entityType: 'VOCABULARY',
     *     operationType: 'UPSERT'|'DELETE',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     completionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
