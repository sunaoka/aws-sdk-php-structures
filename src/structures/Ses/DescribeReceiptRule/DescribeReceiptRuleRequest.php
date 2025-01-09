<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetName
 * @property string $RuleName
 */
class DescribeReceiptRuleRequest extends Request
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
