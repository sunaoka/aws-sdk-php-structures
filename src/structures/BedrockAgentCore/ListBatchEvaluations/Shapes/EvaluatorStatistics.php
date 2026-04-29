<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListBatchEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $averageScore
 */
class EvaluatorStatistics extends Shape
{
    /**
     * @param array{averageScore?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
