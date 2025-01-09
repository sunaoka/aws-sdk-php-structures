<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED' $knowledgeBaseType
 * @property string $name
 * @property Shapes\RenderingConfiguration $renderingConfiguration
 * @property Shapes\ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property Shapes\SourceConfiguration $sourceConfiguration
 * @property array<string, string> $tags
 * @property Shapes\VectorIngestionConfiguration $vectorIngestionConfiguration
 */
class CreateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED',
     *     name: string,
     *     renderingConfiguration?: Shapes\RenderingConfiguration,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration,
     *     sourceConfiguration?: Shapes\SourceConfiguration,
     *     tags?: array<string, string>,
     *     vectorIngestionConfiguration?: Shapes\VectorIngestionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
