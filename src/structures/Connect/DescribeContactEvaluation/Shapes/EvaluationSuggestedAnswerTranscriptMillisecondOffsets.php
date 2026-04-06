<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $BeginOffsetMillis
 */
class EvaluationSuggestedAnswerTranscriptMillisecondOffsets extends Shape
{
    /**
     * @param array{BeginOffsetMillis: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
