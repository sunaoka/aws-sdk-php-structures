<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 * @property string $After
 * @property Shapes\ReceiptRule $Rule
 */
class CreateReceiptRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleSetName: string,
     *     After?: string,
     *     Rule: Shapes\ReceiptRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
