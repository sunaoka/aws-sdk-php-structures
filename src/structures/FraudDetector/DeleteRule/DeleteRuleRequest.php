<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Rule $rule
 */
class DeleteRuleRequest extends Request
{
    /**
     * @param array{rule: Shapes\Rule} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
