<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VectorSearchBedrockRerankingConfiguration $bedrockRerankingConfiguration
 * @property 'BEDROCK_RERANKING_MODEL' $type
 */
class VectorSearchRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockRerankingConfiguration?: VectorSearchBedrockRerankingConfiguration,
     *     type: 'BEDROCK_RERANKING_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
