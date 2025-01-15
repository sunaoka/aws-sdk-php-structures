<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListListeners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property int<1, 65535>|null $port
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH'|null $protocol
 */
class ListenerSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     port?: int<1, 65535>|null,
     *     protocol?: 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
