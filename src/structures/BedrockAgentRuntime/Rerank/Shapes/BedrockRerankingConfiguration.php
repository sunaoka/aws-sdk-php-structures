<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockRerankingModelConfiguration $modelConfiguration
 * @property int<1, 1000>|null $numberOfResults
 */
class BedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     modelConfiguration: BedrockRerankingModelConfiguration,
     *     numberOfResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
