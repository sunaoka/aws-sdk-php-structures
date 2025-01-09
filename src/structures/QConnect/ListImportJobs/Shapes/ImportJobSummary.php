<?php

namespace Sunaoka\Aws\Structures\QConnect\ListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property ExternalSourceConfiguration $externalSourceConfiguration
 * @property string $importJobId
 * @property 'QUICK_RESPONSES' $importJobType
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property array<string, string> $metadata
 * @property 'START_IN_PROGRESS'|'FAILED'|'COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property string $uploadId
 */
class ImportJobSummary extends Shape
{
    /**
     * @param array{
     *     createdTime: \Aws\Api\DateTimeResult,
     *     externalSourceConfiguration?: ExternalSourceConfiguration,
     *     importJobId: string,
     *     importJobType: 'QUICK_RESPONSES',
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     metadata?: array<string, string>,
     *     status: 'START_IN_PROGRESS'|'FAILED'|'COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     uploadId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
