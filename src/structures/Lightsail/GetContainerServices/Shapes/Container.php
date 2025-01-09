<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $image
 * @property list<string> $command
 * @property array<string, string> $environment
 * @property array<string, 'HTTP'|'HTTPS'|'TCP'|'UDP'> $ports
 */
class Container extends Shape
{
    /**
     * @param array{
     *     image?: string,
     *     command?: list<string>,
     *     environment?: array<string, string>,
     *     ports?: array<string, 'HTTP'|'HTTPS'|'TCP'|'UDP'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
