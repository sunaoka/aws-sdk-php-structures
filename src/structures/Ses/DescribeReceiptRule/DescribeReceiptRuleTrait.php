<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRule;

trait DescribeReceiptRuleTrait
{
    /**
     * @param DescribeReceiptRuleRequest $args
     * @return DescribeReceiptRuleResponse
     */
    public function describeReceiptRule(DescribeReceiptRuleRequest $args)
    {
        $result = parent::describeReceiptRule($args->toArray());
        return new DescribeReceiptRuleResponse($result->toArray());
    }
}
