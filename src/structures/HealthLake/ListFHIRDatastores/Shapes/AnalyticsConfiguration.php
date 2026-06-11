<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|'PAUSING'|'PAUSED'|null $Status
 */
class AnalyticsConfiguration extends Shape
{
    /**
     * @param array{Status?: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|'PAUSING'|'PAUSED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
