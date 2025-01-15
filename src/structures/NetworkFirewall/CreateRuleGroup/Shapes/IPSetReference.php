<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReferenceArn
 */
class IPSetReference extends Shape
{
    /**
     * @param array{ReferenceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
