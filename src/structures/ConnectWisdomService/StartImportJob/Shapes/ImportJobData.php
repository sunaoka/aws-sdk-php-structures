<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\StartImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property ExternalSourceConfiguration|null $externalSourceConfiguration
 * @property string|null $failedRecordReport
 * @property string $importJobId
 * @property 'QUICK_RESPONSES' $importJobType
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property array<string, string>|null $metadata
 * @property 'START_IN_PROGRESS'|'FAILED'|'COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property string $uploadId
 * @property string $url
 * @property \Aws\Api\DateTimeResult $urlExpiry
 */
class ImportJobData extends Shape
{
    /**
     * @param array{
     *     createdTime: \Aws\Api\DateTimeResult,
     *     externalSourceConfiguration?: ExternalSourceConfiguration|null,
     *     failedRecordReport?: string|null,
     *     importJobId: string,
     *     importJobType: 'QUICK_RESPONSES',
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     metadata?: array<string, string>|null,
     *     status: 'START_IN_PROGRESS'|'FAILED'|'COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     uploadId: string,
     *     url: string,
     *     urlExpiry: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
