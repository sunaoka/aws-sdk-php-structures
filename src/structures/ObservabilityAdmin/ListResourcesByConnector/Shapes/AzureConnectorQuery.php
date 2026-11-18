<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureManagementGroupsQuery|null $ManagementGroups
 * @property AzureSubscriptionsQuery|null $Subscriptions
 * @property AzureResourceTypesQuery|null $ResourceTypes
 * @property AzureRegionsQuery|null $Regions
 * @property AzureResourceIdsQuery|null $ResourceIds
 * @property AzureEventHubsQuery|null $EventHubs
 */
class AzureConnectorQuery extends Shape
{
    /**
     * @param array{
     *     ManagementGroups?: AzureManagementGroupsQuery|null,
     *     Subscriptions?: AzureSubscriptionsQuery|null,
     *     ResourceTypes?: AzureResourceTypesQuery|null,
     *     Regions?: AzureRegionsQuery|null,
     *     ResourceIds?: AzureResourceIdsQuery|null,
     *     EventHubs?: AzureEventHubsQuery|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
