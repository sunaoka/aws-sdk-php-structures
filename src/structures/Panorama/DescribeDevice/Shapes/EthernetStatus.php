<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'NOT_CONNECTED'|'CONNECTING' $ConnectionStatus
 * @property string $HwAddress
 * @property string $IpAddress
 */
class EthernetStatus extends Shape
{
    /**
     * @param array{
     *     ConnectionStatus?: 'CONNECTED'|'NOT_CONNECTED'|'CONNECTING',
     *     HwAddress?: string,
     *     IpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
