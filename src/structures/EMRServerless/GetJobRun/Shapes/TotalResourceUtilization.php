<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $vCPUHour
 * @property double $memoryGBHour
 * @property double $storageGBHour
 */
class TotalResourceUtilization extends Shape
{
    /**
     * @param array{
     *     vCPUHour?: double,
     *     memoryGBHour?: double,
     *     storageGBHour?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
