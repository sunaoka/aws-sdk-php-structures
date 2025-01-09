<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleArn
 */
class DeleteRuleRequest extends Request
{
    /**
     * @param array{RuleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
