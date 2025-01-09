<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListListeners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property int $port
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH' $protocol
 */
class ListenerSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     port?: int,
     *     protocol?: 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
