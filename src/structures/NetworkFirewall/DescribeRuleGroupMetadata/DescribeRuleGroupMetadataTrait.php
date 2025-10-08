<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroupMetadata;

trait DescribeRuleGroupMetadataTrait
{
    /**
     * @param DescribeRuleGroupMetadataRequest $args
     * @return DescribeRuleGroupMetadataResponse
     */
    public function describeRuleGroupMetadata(DescribeRuleGroupMetadataRequest $args)
    {
        $result = parent::describeRuleGroupMetadata($args->toArray());
        return new DescribeRuleGroupMetadataResponse($result->toArray());
    }
}
