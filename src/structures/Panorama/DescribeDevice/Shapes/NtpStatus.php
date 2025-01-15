<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTED'|'NOT_CONNECTED'|'CONNECTING'|null $ConnectionStatus
 * @property string|null $IpAddress
 * @property string|null $NtpServerName
 */
class NtpStatus extends Shape
{
    /**
     * @param array{
     *     ConnectionStatus?: 'CONNECTED'|'NOT_CONNECTED'|'CONNECTING'|null,
     *     IpAddress?: string|null,
     *     NtpServerName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
