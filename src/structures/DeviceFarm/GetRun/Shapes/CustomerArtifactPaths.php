<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $iosPaths
 * @property list<string> $androidPaths
 * @property list<string> $deviceHostPaths
 */
class CustomerArtifactPaths extends Shape
{
    /**
     * @param array{
     *     iosPaths?: list<string>,
     *     androidPaths?: list<string>,
     *     deviceHostPaths?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
