<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTACT_LENS_DATA'|'GEN_AI'|'CONDITION' $SourceType
 */
class EvaluationFormQuestionAutomationAnswerSource extends Shape
{
    /**
     * @param array{SourceType: 'CONTACT_LENS_DATA'|'GEN_AI'|'CONDITION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
