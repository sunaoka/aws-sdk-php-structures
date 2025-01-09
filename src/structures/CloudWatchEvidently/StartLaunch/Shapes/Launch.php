<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StartLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $description
 * @property LaunchExecution $execution
 * @property list<LaunchGroup> $groups
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property list<MetricMonitor> $metricMonitors
 * @property string $name
 * @property string $project
 * @property string $randomizationSalt
 * @property ScheduledSplitsLaunchDefinition $scheduledSplitsDefinition
 * @property 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED' $status
 * @property string $statusReason
 * @property array<string, string> $tags
 * @property 'aws.evidently.splits' $type
 */
class Launch extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     execution?: LaunchExecution,
     *     groups?: list<LaunchGroup>,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     metricMonitors?: list<MetricMonitor>,
     *     name: string,
     *     project?: string,
     *     randomizationSalt?: string,
     *     scheduledSplitsDefinition?: ScheduledSplitsLaunchDefinition,
     *     status: 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED',
     *     statusReason?: string,
     *     tags?: array<string, string>,
     *     type: 'aws.evidently.splits'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
