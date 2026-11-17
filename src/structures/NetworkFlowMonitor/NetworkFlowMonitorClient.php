<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor;

class NetworkFlowMonitorClient extends \Aws\NetworkFlowMonitor\NetworkFlowMonitorClient
{
    use CreateMonitor\CreateMonitorTrait;
    use CreatePerformanceMonitor\CreatePerformanceMonitorTrait;
    use CreateScope\CreateScopeTrait;
    use DeleteMonitor\DeleteMonitorTrait;
    use DeletePerformanceMonitor\DeletePerformanceMonitorTrait;
    use DeleteScope\DeleteScopeTrait;
    use GetMonitor\GetMonitorTrait;
    use GetMonitorScopeSuggestions\GetMonitorScopeSuggestionsTrait;
    use GetPerformanceMonitor\GetPerformanceMonitorTrait;
    use GetQueryResultsMonitorTopContributors\GetQueryResultsMonitorTopContributorsTrait;
    use GetQueryResultsPerformanceMonitor\GetQueryResultsPerformanceMonitorTrait;
    use GetQueryResultsWorkloadInsightsTopContributors\GetQueryResultsWorkloadInsightsTopContributorsTrait;
    use GetQueryResultsWorkloadInsightsTopContributorsData\GetQueryResultsWorkloadInsightsTopContributorsDataTrait;
    use GetQueryStatusMonitorTopContributors\GetQueryStatusMonitorTopContributorsTrait;
    use GetQueryStatusPerformanceMonitor\GetQueryStatusPerformanceMonitorTrait;
    use GetQueryStatusWorkloadInsightsTopContributors\GetQueryStatusWorkloadInsightsTopContributorsTrait;
    use GetQueryStatusWorkloadInsightsTopContributorsData\GetQueryStatusWorkloadInsightsTopContributorsDataTrait;
    use GetScope\GetScopeTrait;
    use ListMonitors\ListMonitorsTrait;
    use ListPerformanceMonitors\ListPerformanceMonitorsTrait;
    use ListScopes\ListScopesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartQueryMonitorTopContributors\StartQueryMonitorTopContributorsTrait;
    use StartQueryPerformanceMonitor\StartQueryPerformanceMonitorTrait;
    use StartQueryWorkloadInsightsTopContributors\StartQueryWorkloadInsightsTopContributorsTrait;
    use StartQueryWorkloadInsightsTopContributorsData\StartQueryWorkloadInsightsTopContributorsDataTrait;
    use StopQueryMonitorTopContributors\StopQueryMonitorTopContributorsTrait;
    use StopQueryPerformanceMonitor\StopQueryPerformanceMonitorTrait;
    use StopQueryWorkloadInsightsTopContributors\StopQueryWorkloadInsightsTopContributorsTrait;
    use StopQueryWorkloadInsightsTopContributorsData\StopQueryWorkloadInsightsTopContributorsDataTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMonitor\UpdateMonitorTrait;
    use UpdatePerformanceMonitor\UpdatePerformanceMonitorTrait;
    use UpdateScope\UpdateScopeTrait;
}
