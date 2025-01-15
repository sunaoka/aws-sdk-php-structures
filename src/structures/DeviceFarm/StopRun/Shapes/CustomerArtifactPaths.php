<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $iosPaths
 * @property list<string>|null $androidPaths
 * @property list<string>|null $deviceHostPaths
 */
class CustomerArtifactPaths extends Shape
{
    /**
     * @param array{
     *     iosPaths?: list<string>|null,
     *     androidPaths?: list<string>|null,
     *     deviceHostPaths?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
