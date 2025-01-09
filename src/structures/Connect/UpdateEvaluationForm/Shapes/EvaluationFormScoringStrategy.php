<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUESTION_ONLY'|'SECTION_ONLY' $Mode
 * @property 'ENABLED'|'DISABLED' $Status
 */
class EvaluationFormScoringStrategy extends Shape
{
    /**
     * @param array{
     *     Mode: 'QUESTION_ONLY'|'SECTION_ONLY',
     *     Status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
