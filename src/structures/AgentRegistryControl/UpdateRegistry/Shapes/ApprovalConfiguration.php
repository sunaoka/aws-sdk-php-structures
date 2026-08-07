<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'APPROVE_ALL'>|null $autoApprovalRules
 */
class ApprovalConfiguration extends Shape
{
    /**
     * @param array{autoApprovalRules?: list<'APPROVE_ALL'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
