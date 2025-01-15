<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property list<Shapes\LaunchGroupConfig>|null $groups
 * @property string $launch
 * @property list<Shapes\MetricMonitorConfig>|null $metricMonitors
 * @property string $project
 * @property string|null $randomizationSalt
 * @property Shapes\ScheduledSplitsLaunchConfig|null $scheduledSplitsConfig
 */
class UpdateLaunchRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     groups?: list<Shapes\LaunchGroupConfig>|null,
     *     launch: string,
     *     metricMonitors?: list<Shapes\MetricMonitorConfig>|null,
     *     project: string,
     *     randomizationSalt?: string|null,
     *     scheduledSplitsConfig?: Shapes\ScheduledSplitsLaunchConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
