<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateRuleGroupsNamespace;

trait CreateRuleGroupsNamespaceTrait
{
    /**
     * @param CreateRuleGroupsNamespaceRequest $args
     * @return CreateRuleGroupsNamespaceResponse
     */
    public function createRuleGroupsNamespace(CreateRuleGroupsNamespaceRequest $args)
    {
        $result = parent::createRuleGroupsNamespace($args->toArray());
        return new CreateRuleGroupsNamespaceResponse($result->toArray());
    }
}
