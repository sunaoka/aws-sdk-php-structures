<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormItemEnablementCondition $Condition
 * @property 'DISABLE'|'ENABLE' $Action
 * @property 'DISABLE'|'ENABLE'|null $DefaultAction
 */
class EvaluationFormItemEnablementConfiguration extends Shape
{
    /**
     * @param array{
     *     Condition: EvaluationFormItemEnablementCondition,
     *     Action: 'DISABLE'|'ENABLE',
     *     DefaultAction?: 'DISABLE'|'ENABLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
