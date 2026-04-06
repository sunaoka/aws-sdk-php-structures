<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRICT_ORDER'|'DEFAULT_ACTION_ORDER'|null $RuleOrder
 * @property 'DROP'|'CONTINUE'|'REJECT'|'FMS_IGNORE'|null $StreamExceptionPolicy
 */
class StatefulEngineOptions extends Shape
{
    /**
     * @param array{
     *     RuleOrder?: 'STRICT_ORDER'|'DEFAULT_ACTION_ORDER'|null,
     *     StreamExceptionPolicy?: 'DROP'|'CONTINUE'|'REJECT'|'FMS_IGNORE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
