<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServerReplicationType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ips
 * @property bool $isPrimary
 * @property string $macAddress
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     ips?: list<string>,
     *     isPrimary?: bool,
     *     macAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
