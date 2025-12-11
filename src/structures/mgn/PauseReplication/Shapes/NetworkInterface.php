<?php

namespace Sunaoka\Aws\Structures\mgn\PauseReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $macAddress
 * @property list<string>|null $ips
 * @property bool|null $isPrimary
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     macAddress?: string|null,
     *     ips?: list<string>|null,
     *     isPrimary?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
