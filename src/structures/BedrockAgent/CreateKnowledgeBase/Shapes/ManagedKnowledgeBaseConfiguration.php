<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOM'|'MANAGED'|null $embeddingModelType
 * @property string|null $embeddingModelArn
 * @property EmbeddingModelConfiguration|null $embeddingModelConfiguration
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 */
class ManagedKnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     embeddingModelType?: 'CUSTOM'|'MANAGED'|null,
     *     embeddingModelArn?: string|null,
     *     embeddingModelConfiguration?: EmbeddingModelConfiguration|null,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
