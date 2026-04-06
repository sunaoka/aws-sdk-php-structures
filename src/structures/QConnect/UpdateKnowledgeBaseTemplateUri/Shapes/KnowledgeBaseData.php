<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $knowledgeBaseArn
 * @property string $name
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED' $knowledgeBaseType
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult|null $lastContentModificationTime
 * @property VectorIngestionConfiguration|null $vectorIngestionConfiguration
 * @property SourceConfiguration|null $sourceConfiguration
 * @property RenderingConfiguration|null $renderingConfiguration
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property 'SYNC_FAILED'|'SYNCING_IN_PROGRESS'|'SYNC_SUCCESS'|'CREATE_IN_PROGRESS'|null $ingestionStatus
 * @property list<string>|null $ingestionFailureReasons
 */
class KnowledgeBaseData extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     knowledgeBaseArn: string,
     *     name: string,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED',
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     lastContentModificationTime?: \Aws\Api\DateTimeResult|null,
     *     vectorIngestionConfiguration?: VectorIngestionConfiguration|null,
     *     sourceConfiguration?: SourceConfiguration|null,
     *     renderingConfiguration?: RenderingConfiguration|null,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     ingestionStatus?: 'SYNC_FAILED'|'SYNCING_IN_PROGRESS'|'SYNC_SUCCESS'|'CREATE_IN_PROGRESS'|null,
     *     ingestionFailureReasons?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
