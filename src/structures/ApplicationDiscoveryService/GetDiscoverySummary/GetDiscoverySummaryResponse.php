<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\GetDiscoverySummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $servers
 * @property int|null $applications
 * @property int|null $serversMappedToApplications
 * @property int|null $serversMappedtoTags
 * @property Shapes\CustomerAgentInfo|null $agentSummary
 * @property Shapes\CustomerConnectorInfo|null $connectorSummary
 * @property Shapes\CustomerMeCollectorInfo|null $meCollectorSummary
 * @property Shapes\CustomerAgentlessCollectorInfo|null $agentlessCollectorSummary
 */
class GetDiscoverySummaryResponse extends Response
{
}
