<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteReceiptRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 * @property string $RuleName
 */
class DeleteReceiptRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleSetName: string,
     *     RuleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
