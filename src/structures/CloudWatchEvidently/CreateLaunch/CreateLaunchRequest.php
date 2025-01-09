<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property list<Shapes\LaunchGroupConfig> $groups
 * @property list<Shapes\MetricMonitorConfig> $metricMonitors
 * @property string $name
 * @property string $project
 * @property string $randomizationSalt
 * @property Shapes\ScheduledSplitsLaunchConfig $scheduledSplitsConfig
 * @property array<string, string> $tags
 */
class CreateLaunchRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     groups: list<Shapes\LaunchGroupConfig>,
     *     metricMonitors?: list<Shapes\MetricMonitorConfig>,
     *     name: string,
     *     project: string,
     *     randomizationSalt?: string,
     *     scheduledSplitsConfig?: Shapes\ScheduledSplitsLaunchConfig,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
