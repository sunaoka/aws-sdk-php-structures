<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'NOT_CONNECTED'|'CONNECTING' $ConnectionStatus
 * @property string $IpAddress
 * @property string $NtpServerName
 */
class NtpStatus extends Shape
{
    /**
     * @param array{
     *     ConnectionStatus?: 'CONNECTED'|'NOT_CONNECTED'|'CONNECTING',
     *     IpAddress?: string,
     *     NtpServerName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
