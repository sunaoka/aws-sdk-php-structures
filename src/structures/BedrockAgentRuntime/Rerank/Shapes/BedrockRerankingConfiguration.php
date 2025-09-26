<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $numberOfResults
 * @property BedrockRerankingModelConfiguration $modelConfiguration
 */
class BedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     numberOfResults?: int<1, 1000>|null,
     *     modelConfiguration: BedrockRerankingModelConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
