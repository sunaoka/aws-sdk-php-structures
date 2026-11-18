<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchEvaluationArn
 */
class BatchEvaluationSourceConfig extends Shape
{
    /**
     * @param array{batchEvaluationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
