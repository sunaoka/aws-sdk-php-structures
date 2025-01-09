<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockRerankingModelConfiguration $modelConfiguration
 * @property int $numberOfResults
 */
class BedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     modelConfiguration: BedrockRerankingModelConfiguration,
     *     numberOfResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
