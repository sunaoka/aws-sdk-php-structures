<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $total
 * @property double|null $metered
 * @property double|null $unmetered
 */
class DeviceMinutes extends Shape
{
    /**
     * @param array{
     *     total?: double|null,
     *     metered?: double|null,
     *     unmetered?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
