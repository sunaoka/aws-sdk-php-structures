<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $P50
 * @property double $P90
 * @property double $P95
 */
class RoundTripTime extends Shape
{
    /**
     * @param array{
     *     P50?: double,
     *     P90?: double,
     *     P95?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
