<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedSearchBedrockRerankingConfiguration|null $bedrockRerankingConfiguration
 * @property 'BEDROCK_RERANKING_MODEL' $type
 */
class ManagedSearchRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockRerankingConfiguration?: ManagedSearchBedrockRerankingConfiguration|null,
     *     type: 'BEDROCK_RERANKING_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
