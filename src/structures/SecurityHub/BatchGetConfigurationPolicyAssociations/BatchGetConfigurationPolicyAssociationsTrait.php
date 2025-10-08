<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetConfigurationPolicyAssociations;

trait BatchGetConfigurationPolicyAssociationsTrait
{
    /**
     * @param BatchGetConfigurationPolicyAssociationsRequest $args
     * @return BatchGetConfigurationPolicyAssociationsResponse
     */
    public function batchGetConfigurationPolicyAssociations(BatchGetConfigurationPolicyAssociationsRequest $args)
    {
        $result = parent::batchGetConfigurationPolicyAssociations($args->toArray());
        return new BatchGetConfigurationPolicyAssociationsResponse($result->toArray());
    }
}
