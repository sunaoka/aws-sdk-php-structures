<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $knowledgeBaseArn
 * @property string $name
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED' $knowledgeBaseType
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property SourceConfiguration|null $sourceConfiguration
 * @property VectorIngestionConfiguration|null $vectorIngestionConfiguration
 * @property RenderingConfiguration|null $renderingConfiguration
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class KnowledgeBaseSummary extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     knowledgeBaseArn: string,
     *     name: string,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED',
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     sourceConfiguration?: SourceConfiguration|null,
     *     vectorIngestionConfiguration?: VectorIngestionConfiguration|null,
     *     renderingConfiguration?: RenderingConfiguration|null,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
