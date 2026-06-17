<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FoundationModelConfiguration|null $foundationModelConfiguration
 * @property 'CUSTOM'|'MANAGED'|null $foundationModelType
 * @property int<2, max>|null $maxAgentIteration
 * @property AgenticRetrieveRerankingConfiguration|null $rerankingConfiguration
 * @property 'CUSTOM'|'MANAGED'|'NONE'|null $rerankingModelType
 */
class AgenticRetrieveConfiguration extends Shape
{
    /**
     * @param array{
     *     foundationModelConfiguration?: FoundationModelConfiguration|null,
     *     foundationModelType?: 'CUSTOM'|'MANAGED'|null,
     *     maxAgentIteration?: int<2, max>|null,
     *     rerankingConfiguration?: AgenticRetrieveRerankingConfiguration|null,
     *     rerankingModelType?: 'CUSTOM'|'MANAGED'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
