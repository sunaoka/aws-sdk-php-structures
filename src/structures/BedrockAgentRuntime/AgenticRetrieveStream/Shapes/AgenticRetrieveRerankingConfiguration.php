<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveBedrockRerankingConfiguration|null $bedrockRerankingConfiguration
 * @property 'BEDROCK_RERANKING_MODEL' $type
 */
class AgenticRetrieveRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockRerankingConfiguration?: AgenticRetrieveBedrockRerankingConfiguration|null,
     *     type: 'BEDROCK_RERANKING_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
