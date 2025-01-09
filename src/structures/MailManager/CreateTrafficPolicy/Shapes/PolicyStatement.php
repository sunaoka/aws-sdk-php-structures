<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'DENY' $Action
 * @property list<PolicyCondition> $Conditions
 */
class PolicyStatement extends Shape
{
    /**
     * @param array{
     *     Action: 'ALLOW'|'DENY',
     *     Conditions: list<PolicyCondition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
