<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateConnectivityInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostAddress
 * @property string|null $Id
 * @property string|null $Metadata
 * @property int|null $PortNumber
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{
     *     HostAddress?: string|null,
     *     Id?: string|null,
     *     Metadata?: string|null,
     *     PortNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
