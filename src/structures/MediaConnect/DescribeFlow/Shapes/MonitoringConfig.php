<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $ThumbnailState
 * @property list<AudioMonitoringSetting>|null $AudioMonitoringSettings
 * @property 'ENABLED'|'DISABLED'|null $ContentQualityAnalysisState
 * @property list<VideoMonitoringSetting>|null $VideoMonitoringSettings
 */
class MonitoringConfig extends Shape
{
    /**
     * @param array{
     *     ThumbnailState?: 'ENABLED'|'DISABLED'|null,
     *     AudioMonitoringSettings?: list<AudioMonitoringSetting>|null,
     *     ContentQualityAnalysisState?: 'ENABLED'|'DISABLED'|null,
     *     VideoMonitoringSettings?: list<VideoMonitoringSetting>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
