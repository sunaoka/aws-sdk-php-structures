<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evaluatorArn
 * @property ControlStats $controlStats
 * @property list<VariantResult> $variantResults
 */
class EvaluatorMetric extends Shape
{
    /**
     * @param array{
     *     evaluatorArn: string,
     *     controlStats: ControlStats,
     *     variantResults: list<VariantResult>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
