<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $image
 * @property list<string>|null $command
 * @property array<string, string>|null $environment
 * @property array<string, 'HTTP'|'HTTPS'|'TCP'|'UDP'>|null $ports
 */
class Container extends Shape
{
    /**
     * @param array{
     *     image?: string|null,
     *     command?: list<string>|null,
     *     environment?: array<string, string>|null,
     *     ports?: array<string, 'HTTP'|'HTTPS'|'TCP'|'UDP'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
