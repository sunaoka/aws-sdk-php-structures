<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property double $HealthScoreThreshold
 * @property double $MinTrafficImpact
 */
class LocalHealthEventsConfig extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED',
     *     HealthScoreThreshold?: double,
     *     MinTrafficImpact?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
