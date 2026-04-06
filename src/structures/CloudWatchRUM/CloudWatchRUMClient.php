<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM;

class CloudWatchRUMClient extends \Aws\CloudWatchRUM\CloudWatchRUMClient
{
    use BatchCreateRumMetricDefinitions\BatchCreateRumMetricDefinitionsTrait;
    use BatchDeleteRumMetricDefinitions\BatchDeleteRumMetricDefinitionsTrait;
    use BatchGetRumMetricDefinitions\BatchGetRumMetricDefinitionsTrait;
    use CreateAppMonitor\CreateAppMonitorTrait;
    use DeleteAppMonitor\DeleteAppMonitorTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteRumMetricsDestination\DeleteRumMetricsDestinationTrait;
    use GetAppMonitor\GetAppMonitorTrait;
    use GetAppMonitorData\GetAppMonitorDataTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListAppMonitors\ListAppMonitorsTrait;
    use ListRumMetricsDestinations\ListRumMetricsDestinationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use PutRumEvents\PutRumEventsTrait;
    use PutRumMetricsDestination\PutRumMetricsDestinationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAppMonitor\UpdateAppMonitorTrait;
    use UpdateRumMetricDefinition\UpdateRumMetricDefinitionTrait;
}
