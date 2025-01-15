<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $P50
 * @property double|null $P90
 * @property double|null $P95
 */
class RoundTripTime extends Shape
{
    /**
     * @param array{
     *     P50?: double|null,
     *     P90?: double|null,
     *     P95?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
