<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property list<Shapes\LaunchGroupConfig> $groups
 * @property string $launch
 * @property list<Shapes\MetricMonitorConfig> $metricMonitors
 * @property string $project
 * @property string $randomizationSalt
 * @property Shapes\ScheduledSplitsLaunchConfig $scheduledSplitsConfig
 */
class UpdateLaunchRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     groups?: list<Shapes\LaunchGroupConfig>,
     *     launch: string,
     *     metricMonitors?: list<Shapes\MetricMonitorConfig>,
     *     project: string,
     *     randomizationSalt?: string,
     *     scheduledSplitsConfig?: Shapes\ScheduledSplitsLaunchConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
