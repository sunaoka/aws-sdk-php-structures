<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DeleteSafetyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SafetyRuleArn
 */
class DeleteSafetyRuleRequest extends Request
{
    /**
     * @param array{SafetyRuleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
