<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $baseEvaluatorId
 * @property EvaluatorModelConfig $modelConfig
 */
class DerivedEvaluatorConfig extends Shape
{
    /**
     * @param array{
     *     baseEvaluatorId: string,
     *     modelConfig: EvaluatorModelConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
