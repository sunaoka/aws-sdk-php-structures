<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $analysisTimestamp
 * @property list<EvaluatorMetric> $evaluatorMetrics
 */
class ABTestResults extends Shape
{
    /**
     * @param array{
     *     analysisTimestamp?: \Aws\Api\DateTimeResult|null,
     *     evaluatorMetrics: list<EvaluatorMetric>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
