<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AzureManagementGroupSummary>|null $ManagementGroups
 * @property list<AzureSubscriptionSummary>|null $Subscriptions
 * @property list<string>|null $ResourceTypes
 * @property list<string>|null $Regions
 * @property list<AzureResourceIdentifierSummary>|null $ResourceIds
 * @property list<AzureEventHubSummary>|null $EventHubs
 */
class AzureConnectorQueryResults extends Shape
{
    /**
     * @param array{
     *     ManagementGroups?: list<AzureManagementGroupSummary>|null,
     *     Subscriptions?: list<AzureSubscriptionSummary>|null,
     *     ResourceTypes?: list<string>|null,
     *     Regions?: list<string>|null,
     *     ResourceIds?: list<AzureResourceIdentifierSummary>|null,
     *     EventHubs?: list<AzureEventHubSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
