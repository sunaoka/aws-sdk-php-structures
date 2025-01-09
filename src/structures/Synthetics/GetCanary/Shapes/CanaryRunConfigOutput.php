<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TimeoutInSeconds
 * @property int $MemoryInMB
 * @property bool $ActiveTracing
 */
class CanaryRunConfigOutput extends Shape
{
    /**
     * @param array{
     *     TimeoutInSeconds?: int,
     *     MemoryInMB?: int,
     *     ActiveTracing?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
