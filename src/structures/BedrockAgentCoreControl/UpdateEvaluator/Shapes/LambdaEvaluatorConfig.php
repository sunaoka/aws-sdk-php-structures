<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaArn
 * @property int<1, 300>|null $lambdaTimeoutInSeconds
 */
class LambdaEvaluatorConfig extends Shape
{
    /**
     * @param array{
     *     lambdaArn: string,
     *     lambdaTimeoutInSeconds?: int<1, 300>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
