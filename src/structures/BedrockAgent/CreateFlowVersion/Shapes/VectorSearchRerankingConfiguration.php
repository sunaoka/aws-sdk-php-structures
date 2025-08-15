<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEDROCK_RERANKING_MODEL' $type
 * @property VectorSearchBedrockRerankingConfiguration|null $bedrockRerankingConfiguration
 */
class VectorSearchRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'BEDROCK_RERANKING_MODEL',
     *     bedrockRerankingConfiguration?: VectorSearchBedrockRerankingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
