<?php

namespace Sunaoka\Aws\Structures\QConnect\StartImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $importJobId
 * @property string $knowledgeBaseId
 * @property string $uploadId
 * @property string $knowledgeBaseArn
 * @property 'QUICK_RESPONSES' $importJobType
 * @property 'START_IN_PROGRESS'|'FAILED'|'COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property string $url
 * @property string|null $failedRecordReport
 * @property \Aws\Api\DateTimeResult $urlExpiry
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property array<string, string>|null $metadata
 * @property ExternalSourceConfiguration|null $externalSourceConfiguration
 */
class ImportJobData extends Shape
{
    /**
     * @param array{
     *     importJobId: string,
     *     knowledgeBaseId: string,
     *     uploadId: string,
     *     knowledgeBaseArn: string,
     *     importJobType: 'QUICK_RESPONSES',
     *     status: 'START_IN_PROGRESS'|'FAILED'|'COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     url: string,
     *     failedRecordReport?: string|null,
     *     urlExpiry: \Aws\Api\DateTimeResult,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     metadata?: array<string, string>|null,
     *     externalSourceConfiguration?: ExternalSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
