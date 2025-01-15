<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\CreateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property double|null $HealthScoreThreshold
 * @property double|null $MinTrafficImpact
 */
class LocalHealthEventsConfig extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     HealthScoreThreshold?: double|null,
     *     MinTrafficImpact?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
