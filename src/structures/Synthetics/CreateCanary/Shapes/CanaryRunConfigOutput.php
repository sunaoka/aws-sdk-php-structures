<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3, 840>|null $TimeoutInSeconds
 * @property int<960, 3008>|null $MemoryInMB
 * @property bool|null $ActiveTracing
 */
class CanaryRunConfigOutput extends Shape
{
    /**
     * @param array{
     *     TimeoutInSeconds?: int<3, 840>|null,
     *     MemoryInMB?: int<960, 3008>|null,
     *     ActiveTracing?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
