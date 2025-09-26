<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RerankQuery> $queries
 * @property list<Shapes\RerankSource> $sources
 * @property Shapes\RerankingConfiguration $rerankingConfiguration
 * @property string|null $nextToken
 */
class RerankRequest extends Request
{
    /**
     * @param array{
     *     queries: list<Shapes\RerankQuery>,
     *     sources: list<Shapes\RerankSource>,
     *     rerankingConfiguration: Shapes\RerankingConfiguration,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
