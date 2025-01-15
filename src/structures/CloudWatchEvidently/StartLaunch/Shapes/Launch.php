<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StartLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string|null $description
 * @property LaunchExecution|null $execution
 * @property list<LaunchGroup>|null $groups
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property list<MetricMonitor>|null $metricMonitors
 * @property string $name
 * @property string|null $project
 * @property string|null $randomizationSalt
 * @property ScheduledSplitsLaunchDefinition|null $scheduledSplitsDefinition
 * @property 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED' $status
 * @property string|null $statusReason
 * @property array<string, string>|null $tags
 * @property 'aws.evidently.splits' $type
 */
class Launch extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     execution?: LaunchExecution|null,
     *     groups?: list<LaunchGroup>|null,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     metricMonitors?: list<MetricMonitor>|null,
     *     name: string,
     *     project?: string|null,
     *     randomizationSalt?: string|null,
     *     scheduledSplitsDefinition?: ScheduledSplitsLaunchDefinition|null,
     *     status: 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED',
     *     statusReason?: string|null,
     *     tags?: array<string, string>|null,
     *     type: 'aws.evidently.splits'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
