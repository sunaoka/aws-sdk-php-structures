<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteRateBasedRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $ChangeToken
 */
class DeleteRateBasedRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
