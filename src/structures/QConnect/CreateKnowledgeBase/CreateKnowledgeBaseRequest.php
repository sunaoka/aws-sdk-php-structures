<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED' $knowledgeBaseType
 * @property Shapes\SourceConfiguration|null $sourceConfiguration
 * @property Shapes\RenderingConfiguration|null $renderingConfiguration
 * @property Shapes\VectorIngestionConfiguration|null $vectorIngestionConfiguration
 * @property Shapes\ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class CreateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES'|'MESSAGE_TEMPLATES'|'MANAGED',
     *     sourceConfiguration?: Shapes\SourceConfiguration|null,
     *     renderingConfiguration?: Shapes\RenderingConfiguration|null,
     *     vectorIngestionConfiguration?: Shapes\VectorIngestionConfiguration|null,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
