<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\UpdateKnowledgeBaseTemplateUri\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES' $knowledgeBaseType
 * @property \Aws\Api\DateTimeResult $lastContentModificationTime
 * @property string $name
 * @property RenderingConfiguration $renderingConfiguration
 * @property ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property SourceConfiguration $sourceConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string> $tags
 */
class KnowledgeBaseData extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES',
     *     lastContentModificationTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     renderingConfiguration?: RenderingConfiguration,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration,
     *     sourceConfiguration?: SourceConfiguration,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
