<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchOutputConfig $cloudWatchConfig
 */
class OutputConfig extends Shape
{
    /**
     * @param array{cloudWatchConfig: CloudWatchOutputConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
