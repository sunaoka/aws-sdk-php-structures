<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockRerankingConfiguration $bedrockRerankingConfiguration
 * @property 'BEDROCK_RERANKING_MODEL' $type
 */
class RerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockRerankingConfiguration: BedrockRerankingConfiguration,
     *     type: 'BEDROCK_RERANKING_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
