<?php

namespace Sunaoka\Aws\Structures\OAM\GetLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogGroupConfiguration $LogGroupConfiguration
 * @property MetricConfiguration $MetricConfiguration
 */
class LinkConfiguration extends Shape
{
    /**
     * @param array{
     *     LogGroupConfiguration?: LogGroupConfiguration,
     *     MetricConfiguration?: MetricConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
