<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRICT_ORDER'|'DEFAULT_ACTION_ORDER' $RuleOrder
 * @property 'DROP'|'CONTINUE'|'REJECT'|'FMS_IGNORE' $StreamExceptionPolicy
 */
class StatefulEngineOptions extends Shape
{
    /**
     * @param array{
     *     RuleOrder?: 'STRICT_ORDER'|'DEFAULT_ACTION_ORDER',
     *     StreamExceptionPolicy?: 'DROP'|'CONTINUE'|'REJECT'|'FMS_IGNORE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
