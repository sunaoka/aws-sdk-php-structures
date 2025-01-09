<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $ChangeToken
 */
class DeleteRuleRequest extends Request
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
