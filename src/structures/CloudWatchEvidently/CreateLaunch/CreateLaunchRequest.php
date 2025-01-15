<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateLaunch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property list<Shapes\LaunchGroupConfig> $groups
 * @property list<Shapes\MetricMonitorConfig>|null $metricMonitors
 * @property string $name
 * @property string $project
 * @property string|null $randomizationSalt
 * @property Shapes\ScheduledSplitsLaunchConfig|null $scheduledSplitsConfig
 * @property array<string, string>|null $tags
 */
class CreateLaunchRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     groups: list<Shapes\LaunchGroupConfig>,
     *     metricMonitors?: list<Shapes\MetricMonitorConfig>|null,
     *     name: string,
     *     project: string,
     *     randomizationSalt?: string|null,
     *     scheduledSplitsConfig?: Shapes\ScheduledSplitsLaunchConfig|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
