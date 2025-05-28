<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3, 840>|null $TimeoutInSeconds
 * @property int<960, 3008>|null $MemoryInMB
 * @property bool|null $ActiveTracing
 * @property int<1024, 5120>|null $EphemeralStorage
 */
class CanaryRunConfigOutput extends Shape
{
    /**
     * @param array{
     *     TimeoutInSeconds?: int<3, 840>|null,
     *     MemoryInMB?: int<960, 3008>|null,
     *     ActiveTracing?: bool|null,
     *     EphemeralStorage?: int<1024, 5120>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
