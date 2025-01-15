<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'NOT_CONNECTED'|'CONNECTING'|null $ConnectionStatus
 * @property string|null $HwAddress
 * @property string|null $IpAddress
 */
class EthernetStatus extends Shape
{
    /**
     * @param array{
     *     ConnectionStatus?: 'CONNECTED'|'NOT_CONNECTED'|'CONNECTING'|null,
     *     HwAddress?: string|null,
     *     IpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
