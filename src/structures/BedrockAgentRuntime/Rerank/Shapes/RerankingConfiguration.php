<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEDROCK_RERANKING_MODEL' $type
 * @property BedrockRerankingConfiguration $bedrockRerankingConfiguration
 */
class RerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'BEDROCK_RERANKING_MODEL',
     *     bedrockRerankingConfiguration: BedrockRerankingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
