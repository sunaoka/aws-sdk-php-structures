<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTACT_LENS_DATA'|'GEN_AI' $SourceType
 */
class EvaluationFormQuestionAutomationAnswerSource extends Shape
{
    /**
     * @param array{SourceType: 'CONTACT_LENS_DATA'|'GEN_AI'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
