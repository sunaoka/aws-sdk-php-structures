<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceCreatedMetadata|null $serviceCreated
 * @property ServiceDeletedMetadata|null $serviceDeleted
 * @property ServiceSystemAssociatedMetadata|null $serviceSystemAssociated
 * @property ServiceSystemDisassociatedMetadata|null $serviceSystemDisassociated
 * @property ServiceResourcesAssociatedMetadata|null $serviceResourcesAssociated
 * @property ServiceResourcesDisassociatedMetadata|null $serviceResourcesDisassociated
 * @property ServiceWorkflowUpdatedMetadata|null $serviceWorkflowUpdated
 * @property ServiceInputSourcesUpdatedMetadata|null $serviceInputSourcesUpdated
 * @property ServicePolicyAssociatedMetadata|null $servicePolicyAssociated
 * @property ServicePolicyDisassociatedMetadata|null $servicePolicyDisassociated
 * @property ServiceFunctionCreatedMetadata|null $serviceFunctionCreated
 * @property ServiceFunctionUpdatedMetadata|null $serviceFunctionUpdated
 * @property ServiceFunctionDeletedMetadata|null $serviceFunctionDeleted
 * @property ServiceFunctionResourcesAddedMetadata|null $serviceFunctionResourcesAdded
 * @property ServiceFunctionResourcesRemovedMetadata|null $serviceFunctionResourcesRemoved
 * @property ServiceAchievabilityUpdatedMetadata|null $serviceAchievabilityUpdated
 * @property AssertionCreatedMetadata|null $assertionCreated
 * @property AssertionUpdatedMetadata|null $assertionUpdated
 * @property AssertionDeletedMetadata|null $assertionDeleted
 */
class ServiceEventMetadata extends Shape
{
    /**
     * @param array{
     *     serviceCreated?: ServiceCreatedMetadata|null,
     *     serviceDeleted?: ServiceDeletedMetadata|null,
     *     serviceSystemAssociated?: ServiceSystemAssociatedMetadata|null,
     *     serviceSystemDisassociated?: ServiceSystemDisassociatedMetadata|null,
     *     serviceResourcesAssociated?: ServiceResourcesAssociatedMetadata|null,
     *     serviceResourcesDisassociated?: ServiceResourcesDisassociatedMetadata|null,
     *     serviceWorkflowUpdated?: ServiceWorkflowUpdatedMetadata|null,
     *     serviceInputSourcesUpdated?: ServiceInputSourcesUpdatedMetadata|null,
     *     servicePolicyAssociated?: ServicePolicyAssociatedMetadata|null,
     *     servicePolicyDisassociated?: ServicePolicyDisassociatedMetadata|null,
     *     serviceFunctionCreated?: ServiceFunctionCreatedMetadata|null,
     *     serviceFunctionUpdated?: ServiceFunctionUpdatedMetadata|null,
     *     serviceFunctionDeleted?: ServiceFunctionDeletedMetadata|null,
     *     serviceFunctionResourcesAdded?: ServiceFunctionResourcesAddedMetadata|null,
     *     serviceFunctionResourcesRemoved?: ServiceFunctionResourcesRemovedMetadata|null,
     *     serviceAchievabilityUpdated?: ServiceAchievabilityUpdatedMetadata|null,
     *     assertionCreated?: AssertionCreatedMetadata|null,
     *     assertionUpdated?: AssertionUpdatedMetadata|null,
     *     assertionDeleted?: AssertionDeletedMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
