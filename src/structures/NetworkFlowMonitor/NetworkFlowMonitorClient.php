<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor;

class NetworkFlowMonitorClient extends \Aws\NetworkFlowMonitor\NetworkFlowMonitorClient
{
    use CreateMonitor\CreateMonitorTrait;
    use CreateScope\CreateScopeTrait;
    use DeleteMonitor\DeleteMonitorTrait;
    use DeleteScope\DeleteScopeTrait;
    use GetMonitor\GetMonitorTrait;
    use GetQueryResultsMonitorTopContributors\GetQueryResultsMonitorTopContributorsTrait;
    use GetQueryResultsWorkloadInsightsTopContributors\GetQueryResultsWorkloadInsightsTopContributorsTrait;
    use GetQueryResultsWorkloadInsightsTopContributorsData\GetQueryResultsWorkloadInsightsTopContributorsDataTrait;
    use GetQueryStatusMonitorTopContributors\GetQueryStatusMonitorTopContributorsTrait;
    use GetQueryStatusWorkloadInsightsTopContributors\GetQueryStatusWorkloadInsightsTopContributorsTrait;
    use GetQueryStatusWorkloadInsightsTopContributorsData\GetQueryStatusWorkloadInsightsTopContributorsDataTrait;
    use GetScope\GetScopeTrait;
    use ListMonitors\ListMonitorsTrait;
    use ListScopes\ListScopesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartQueryMonitorTopContributors\StartQueryMonitorTopContributorsTrait;
    use StartQueryWorkloadInsightsTopContributors\StartQueryWorkloadInsightsTopContributorsTrait;
    use StartQueryWorkloadInsightsTopContributorsData\StartQueryWorkloadInsightsTopContributorsDataTrait;
    use StopQueryMonitorTopContributors\StopQueryMonitorTopContributorsTrait;
    use StopQueryWorkloadInsightsTopContributors\StopQueryWorkloadInsightsTopContributorsTrait;
    use StopQueryWorkloadInsightsTopContributorsData\StopQueryWorkloadInsightsTopContributorsDataTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMonitor\UpdateMonitorTrait;
    use UpdateScope\UpdateScopeTrait;
}
