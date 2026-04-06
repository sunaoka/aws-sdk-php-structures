<?php

namespace Sunaoka\Aws\Structures\OAM\UpdateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogGroupConfiguration|null $LogGroupConfiguration
 * @property MetricConfiguration|null $MetricConfiguration
 */
class LinkConfiguration extends Shape
{
    /**
     * @param array{
     *     LogGroupConfiguration?: LogGroupConfiguration|null,
     *     MetricConfiguration?: MetricConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
