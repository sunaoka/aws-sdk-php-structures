<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeSafetyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SafetyRuleArn
 */
class DescribeSafetyRuleRequest extends Request
{
    /**
     * @param array{SafetyRuleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
