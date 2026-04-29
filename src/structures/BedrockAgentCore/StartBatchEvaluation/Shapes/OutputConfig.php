<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchOutputConfig|null $cloudWatchConfig
 */
class OutputConfig extends Shape
{
    /**
     * @param array{cloudWatchConfig?: CloudWatchOutputConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
