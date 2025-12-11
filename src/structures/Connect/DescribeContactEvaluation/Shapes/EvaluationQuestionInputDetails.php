<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RAW'|'REDACTED'|null $TranscriptType
 */
class EvaluationQuestionInputDetails extends Shape
{
    /**
     * @param array{TranscriptType?: 'RAW'|'REDACTED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
