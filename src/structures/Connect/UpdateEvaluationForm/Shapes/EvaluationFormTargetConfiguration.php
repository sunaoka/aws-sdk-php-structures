<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENT'|'AUTOMATED' $ContactInteractionType
 */
class EvaluationFormTargetConfiguration extends Shape
{
    /**
     * @param array{ContactInteractionType: 'AGENT'|'AUTOMATED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
