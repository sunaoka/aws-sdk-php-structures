<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRICT_ORDER'|'DEFAULT_ACTION_ORDER'|null $RuleOrder
 */
class StatefulEngineOptions extends Shape
{
    /**
     * @param array{RuleOrder?: 'STRICT_ORDER'|'DEFAULT_ACTION_ORDER'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
