<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InlineGroundTruth|null $inline
 */
class GroundTruthSource extends Shape
{
    /**
     * @param array{inline?: InlineGroundTruth|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
