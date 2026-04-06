<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES' $knowledgeBaseType
 * @property string $name
 * @property Shapes\RenderingConfiguration|null $renderingConfiguration
 * @property Shapes\ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property Shapes\SourceConfiguration|null $sourceConfiguration
 * @property array<string, string>|null $tags
 */
class CreateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES',
     *     name: string,
     *     renderingConfiguration?: Shapes\RenderingConfiguration|null,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration|null,
     *     sourceConfiguration?: Shapes\SourceConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
