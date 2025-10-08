<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteRuleGroupsNamespace;

trait DeleteRuleGroupsNamespaceTrait
{
    /**
     * @param DeleteRuleGroupsNamespaceRequest $args
     * @return void
     */
    public function deleteRuleGroupsNamespace(DeleteRuleGroupsNamespaceRequest $args)
    {
        parent::deleteRuleGroupsNamespace($args->toArray());
    }
}
