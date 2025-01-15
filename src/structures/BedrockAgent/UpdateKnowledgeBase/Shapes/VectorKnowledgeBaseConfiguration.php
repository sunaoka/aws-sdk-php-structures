<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $embeddingModelArn
 * @property EmbeddingModelConfiguration|null $embeddingModelConfiguration
 * @property SupplementalDataStorageConfiguration|null $supplementalDataStorageConfiguration
 */
class VectorKnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     embeddingModelArn: string,
     *     embeddingModelConfiguration?: EmbeddingModelConfiguration|null,
     *     supplementalDataStorageConfiguration?: SupplementalDataStorageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
