<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 */
class GetCustomDetectionRuleRequest extends Request
{
    /**
     * @param array{RuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
