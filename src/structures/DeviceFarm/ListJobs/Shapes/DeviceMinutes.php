<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $total
 * @property double $metered
 * @property double $unmetered
 */
class DeviceMinutes extends Shape
{
    /**
     * @param array{
     *     total?: double,
     *     metered?: double,
     *     unmetered?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
