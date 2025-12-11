<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetAutomationRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleArn
 */
class GetAutomationRuleRequest extends Request
{
    /**
     * @param array{ruleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
