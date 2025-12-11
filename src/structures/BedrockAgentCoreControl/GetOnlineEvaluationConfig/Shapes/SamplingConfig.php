<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $samplingPercentage
 */
class SamplingConfig extends Shape
{
    /**
     * @param array{samplingPercentage: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
