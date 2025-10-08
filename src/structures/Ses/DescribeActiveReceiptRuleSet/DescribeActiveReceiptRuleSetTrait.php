<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeActiveReceiptRuleSet;

trait DescribeActiveReceiptRuleSetTrait
{
    /**
     * @param DescribeActiveReceiptRuleSetRequest $args
     * @return DescribeActiveReceiptRuleSetResponse
     */
    public function describeActiveReceiptRuleSet(DescribeActiveReceiptRuleSetRequest $args)
    {
        $result = parent::describeActiveReceiptRuleSet($args->toArray());
        return new DescribeActiveReceiptRuleSetResponse($result->toArray());
    }
}
