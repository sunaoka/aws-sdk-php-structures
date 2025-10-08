<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicies;

trait ListConfigurationPoliciesTrait
{
    /**
     * @param ListConfigurationPoliciesRequest $args
     * @return ListConfigurationPoliciesResponse
     */
    public function listConfigurationPolicies(ListConfigurationPoliciesRequest $args)
    {
        $result = parent::listConfigurationPolicies($args->toArray());
        return new ListConfigurationPoliciesResponse($result->toArray());
    }
}
