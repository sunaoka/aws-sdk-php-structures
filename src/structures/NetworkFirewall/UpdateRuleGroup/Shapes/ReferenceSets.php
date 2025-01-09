<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, IPSetReference> $IPSetReferences
 */
class ReferenceSets extends Shape
{
    /**
     * @param array{IPSetReferences?: array<string, IPSetReference>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
