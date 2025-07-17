<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PolicyCondition> $Conditions
 * @property 'ALLOW'|'DENY' $Action
 */
class PolicyStatement extends Shape
{
    /**
     * @param array{
     *     Conditions: list<PolicyCondition>,
     *     Action: 'ALLOW'|'DENY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
