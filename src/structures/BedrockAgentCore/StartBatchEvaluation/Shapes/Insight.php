<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $insightId
 */
class Insight extends Shape
{
    /**
     * @param array{insightId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
