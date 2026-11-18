<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubscriptionId
 * @property list<AzureEventHubConfiguration>|null $EventHubs
 * @property AzureFlowLogsInfrastructure|null $FlowLogs
 */
class AzureInfrastructure extends Shape
{
    /**
     * @param array{
     *     SubscriptionId?: string|null,
     *     EventHubs?: list<AzureEventHubConfiguration>|null,
     *     FlowLogs?: AzureFlowLogsInfrastructure|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
