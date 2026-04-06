<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SamplingConfig $samplingConfig
 * @property list<Filter>|null $filters
 * @property SessionConfig|null $sessionConfig
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     samplingConfig: SamplingConfig,
     *     filters?: list<Filter>|null,
     *     sessionConfig?: SessionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
