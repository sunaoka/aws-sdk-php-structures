<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutRuleGroupsNamespace;

trait PutRuleGroupsNamespaceTrait
{
    /**
     * @param PutRuleGroupsNamespaceRequest $args
     * @return PutRuleGroupsNamespaceResponse
     */
    public function putRuleGroupsNamespace(PutRuleGroupsNamespaceRequest $args)
    {
        $result = parent::putRuleGroupsNamespace($args->toArray());
        return new PutRuleGroupsNamespaceResponse($result->toArray());
    }
}
