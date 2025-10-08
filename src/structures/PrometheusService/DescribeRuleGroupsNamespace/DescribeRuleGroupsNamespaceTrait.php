<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeRuleGroupsNamespace;

trait DescribeRuleGroupsNamespaceTrait
{
    /**
     * @param DescribeRuleGroupsNamespaceRequest $args
     * @return DescribeRuleGroupsNamespaceResponse
     */
    public function describeRuleGroupsNamespace(DescribeRuleGroupsNamespaceRequest $args)
    {
        $result = parent::describeRuleGroupsNamespace($args->toArray());
        return new DescribeRuleGroupsNamespaceResponse($result->toArray());
    }
}
