<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicyAssociations;

trait ListConfigurationPolicyAssociationsTrait
{
    /**
     * @param ListConfigurationPolicyAssociationsRequest $args
     * @return ListConfigurationPolicyAssociationsResponse
     */
    public function listConfigurationPolicyAssociations(ListConfigurationPolicyAssociationsRequest $args)
    {
        $result = parent::listConfigurationPolicyAssociations($args->toArray());
        return new ListConfigurationPolicyAssociationsResponse($result->toArray());
    }
}
