<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelIdentifier
 * @property string $inferenceParams
 */
class EvaluationBedrockModel extends Shape
{
    /**
     * @param array{
     *     modelIdentifier: string,
     *     inferenceParams?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
