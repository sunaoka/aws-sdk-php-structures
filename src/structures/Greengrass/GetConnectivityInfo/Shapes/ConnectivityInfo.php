<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectivityInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostAddress
 * @property string $Id
 * @property string $Metadata
 * @property int $PortNumber
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{
     *     HostAddress?: string,
     *     Id?: string,
     *     Metadata?: string,
     *     PortNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
