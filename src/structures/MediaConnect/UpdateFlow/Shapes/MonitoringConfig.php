<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ThumbnailState
 * @property list<AudioMonitoringSetting> $AudioMonitoringSettings
 * @property 'ENABLED'|'DISABLED' $ContentQualityAnalysisState
 * @property list<VideoMonitoringSetting> $VideoMonitoringSettings
 */
class MonitoringConfig extends Shape
{
    /**
     * @param array{
     *     ThumbnailState?: 'ENABLED'|'DISABLED',
     *     AudioMonitoringSettings?: list<AudioMonitoringSetting>,
     *     ContentQualityAnalysisState?: 'ENABLED'|'DISABLED',
     *     VideoMonitoringSettings?: list<VideoMonitoringSetting>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
