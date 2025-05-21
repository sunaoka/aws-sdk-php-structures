<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VectorSearchBedrockRerankingConfiguration|null $bedrockRerankingConfiguration
 * @property 'BEDROCK_RERANKING_MODEL' $type
 */
class VectorSearchRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockRerankingConfiguration?: VectorSearchBedrockRerankingConfiguration|null,
     *     type: 'BEDROCK_RERANKING_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
