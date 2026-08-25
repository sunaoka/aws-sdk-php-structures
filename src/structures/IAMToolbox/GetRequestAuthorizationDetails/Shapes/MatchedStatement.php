<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sid
 * @property 'ALLOW'|'DENY'|null $evaluatedEffect
 */
class MatchedStatement extends Shape
{
    /**
     * @param array{
     *     sid?: string|null,
     *     evaluatedEffect?: 'ALLOW'|'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
