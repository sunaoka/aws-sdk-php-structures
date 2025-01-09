<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES' $knowledgeBaseType
 * @property string $name
 * @property Shapes\RenderingConfiguration $renderingConfiguration
 * @property Shapes\ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property Shapes\SourceConfiguration $sourceConfiguration
 * @property array<string, string> $tags
 */
class CreateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     knowledgeBaseType: 'EXTERNAL'|'CUSTOM'|'QUICK_RESPONSES',
     *     name: string,
     *     renderingConfiguration?: Shapes\RenderingConfiguration,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration,
     *     sourceConfiguration?: Shapes\SourceConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
