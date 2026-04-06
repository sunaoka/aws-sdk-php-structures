<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property list<Shapes\RerankQuery> $queries
 * @property Shapes\RerankingConfiguration $rerankingConfiguration
 * @property list<Shapes\RerankSource> $sources
 */
class RerankRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     queries: list<Shapes\RerankQuery>,
     *     rerankingConfiguration: Shapes\RerankingConfiguration,
     *     sources: list<Shapes\RerankSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
