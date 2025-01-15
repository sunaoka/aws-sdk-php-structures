<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ips
 * @property bool|null $isPrimary
 * @property string|null $macAddress
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     ips?: list<string>|null,
     *     isPrimary?: bool|null,
     *     macAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
