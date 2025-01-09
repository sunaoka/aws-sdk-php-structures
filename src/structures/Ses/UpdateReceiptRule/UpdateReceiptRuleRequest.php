<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateReceiptRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 * @property Shapes\ReceiptRule $Rule
 */
class UpdateReceiptRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleSetName: string,
     *     Rule: Shapes\ReceiptRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
