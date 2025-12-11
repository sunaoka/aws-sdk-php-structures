<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 30> $fixedLengthDuration
 */
class AudioSegmentationConfiguration extends Shape
{
    /**
     * @param array{fixedLengthDuration: int<1, 30>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
