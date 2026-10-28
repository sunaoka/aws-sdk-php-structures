<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAllowedImagesSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $MaxDaysSinceLastFindingScan
 * @property 'informational'|'low'|'medium'|'high'|'critical'|null $MaximumSeverityLabel
 * @property int<0, 2147483647>|null $MaxDaysSinceInformationalFixAvailable
 * @property int<0, 2147483647>|null $MaxDaysSinceLowFixAvailable
 * @property int<0, 2147483647>|null $MaxDaysSinceMediumFixAvailable
 * @property int<0, 2147483647>|null $MaxDaysSinceHighFixAvailable
 * @property int<0, 2147483647>|null $MaxDaysSinceCriticalFixAvailable
 */
class ScanResultCondition extends Shape
{
    /**
     * @param array{
     *     MaxDaysSinceLastFindingScan?: int<0, 2147483647>|null,
     *     MaximumSeverityLabel?: 'informational'|'low'|'medium'|'high'|'critical'|null,
     *     MaxDaysSinceInformationalFixAvailable?: int<0, 2147483647>|null,
     *     MaxDaysSinceLowFixAvailable?: int<0, 2147483647>|null,
     *     MaxDaysSinceMediumFixAvailable?: int<0, 2147483647>|null,
     *     MaxDaysSinceHighFixAvailable?: int<0, 2147483647>|null,
     *     MaxDaysSinceCriticalFixAvailable?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
