<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListRuleGroupsNamespaces;

trait ListRuleGroupsNamespacesTrait
{
    /**
     * @param ListRuleGroupsNamespacesRequest $args
     * @return ListRuleGroupsNamespacesResponse
     */
    public function listRuleGroupsNamespaces(ListRuleGroupsNamespacesRequest $args)
    {
        $result = parent::listRuleGroupsNamespaces($args->toArray());
        return new ListRuleGroupsNamespacesResponse($result->toArray());
    }
}
