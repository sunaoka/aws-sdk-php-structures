<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RulePriorityPair> $RulePriorities
 */
class SetRulePrioritiesRequest extends Request
{
    /**
     * @param array{RulePriorities: list<Shapes\RulePriorityPair>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
