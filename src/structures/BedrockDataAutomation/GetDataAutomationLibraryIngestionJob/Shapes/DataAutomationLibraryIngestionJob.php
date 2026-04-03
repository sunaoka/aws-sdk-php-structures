<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'VOCABULARY' $entityType
 * @property 'UPSERT'|'DELETE' $operationType
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $jobStatus
 * @property OutputConfiguration $outputConfiguration
 * @property \Aws\Api\DateTimeResult|null $completionTime
 * @property string|null $errorMessage
 * @property string|null $errorType
 */
class DataAutomationLibraryIngestionJob extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     entityType: 'VOCABULARY',
     *     operationType: 'UPSERT'|'DELETE',
     *     jobStatus: 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED',
     *     outputConfiguration: OutputConfiguration,
     *     completionTime?: \Aws\Api\DateTimeResult|null,
     *     errorMessage?: string|null,
     *     errorType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
