<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListListeners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH'|null $protocol
 * @property int<1, 65535>|null $port
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class ListenerSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     protocol?: 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH'|null,
     *     port?: int<1, 65535>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
