<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRuleSet;

trait DescribeReceiptRuleSetTrait
{
    /**
     * @param DescribeReceiptRuleSetRequest $args
     * @return DescribeReceiptRuleSetResponse
     */
    public function describeReceiptRuleSet(DescribeReceiptRuleSetRequest $args)
    {
        $result = parent::describeReceiptRuleSet($args->toArray());
        return new DescribeReceiptRuleSetResponse($result->toArray());
    }
}
