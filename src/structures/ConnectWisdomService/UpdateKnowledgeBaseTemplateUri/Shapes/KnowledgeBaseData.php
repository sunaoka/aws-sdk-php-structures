<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES' $knowledgeBaseType
 * @property \Aws\Api\DateTimeResult|null $lastContentModificationTime
 * @property string $name
 * @property RenderingConfiguration|null $renderingConfiguration
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property SourceConfiguration|null $sourceConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string>|null $tags
 */
class KnowledgeBaseData extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES',
     *     lastContentModificationTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     renderingConfiguration?: RenderingConfiguration|null,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     sourceConfiguration?: SourceConfiguration|null,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
