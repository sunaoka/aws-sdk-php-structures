<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\GetDiscoverySummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $servers
 * @property int $applications
 * @property int $serversMappedToApplications
 * @property int $serversMappedtoTags
 * @property Shapes\CustomerAgentInfo $agentSummary
 * @property Shapes\CustomerConnectorInfo $connectorSummary
 * @property Shapes\CustomerMeCollectorInfo $meCollectorSummary
 * @property Shapes\CustomerAgentlessCollectorInfo $agentlessCollectorSummary
 */
class GetDiscoverySummaryResponse extends Response
{
}
