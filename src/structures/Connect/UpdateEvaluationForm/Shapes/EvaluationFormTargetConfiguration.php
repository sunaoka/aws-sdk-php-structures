<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENT'|'AUTOMATED'|'CUSTOMER' $ContactInteractionType
 */
class EvaluationFormTargetConfiguration extends Shape
{
    /**
     * @param array{ContactInteractionType: 'AGENT'|'AUTOMATED'|'CUSTOMER'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
