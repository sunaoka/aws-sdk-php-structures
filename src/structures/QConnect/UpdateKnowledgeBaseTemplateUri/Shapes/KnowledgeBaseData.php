<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property list<string> $ingestionFailureReasons
 * @property 'SYNC_FAILED'|'SYNCING_IN_PROGRESS'|'SYNC_SUCCESS'|'CREATE_IN_PROGRESS' $ingestionStatus
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED' $knowledgeBaseType
 * @property \Aws\Api\DateTimeResult $lastContentModificationTime
 * @property string $name
 * @property RenderingConfiguration $renderingConfiguration
 * @property ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property SourceConfiguration $sourceConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string> $tags
 * @property VectorIngestionConfiguration $vectorIngestionConfiguration
 */
class KnowledgeBaseData extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     ingestionFailureReasons?: list<string>,
     *     ingestionStatus?: 'SYNC_FAILED'|'SYNCING_IN_PROGRESS'|'SYNC_SUCCESS'|'CREATE_IN_PROGRESS',
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED',
     *     lastContentModificationTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     renderingConfiguration?: RenderingConfiguration,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration,
     *     sourceConfiguration?: SourceConfiguration,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>,
     *     vectorIngestionConfiguration?: VectorIngestionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
