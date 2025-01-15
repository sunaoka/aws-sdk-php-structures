<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $vCPUHour
 * @property double|null $memoryGBHour
 * @property double|null $storageGBHour
 */
class TotalResourceUtilization extends Shape
{
    /**
     * @param array{
     *     vCPUHour?: double|null,
     *     memoryGBHour?: double|null,
     *     storageGBHour?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
