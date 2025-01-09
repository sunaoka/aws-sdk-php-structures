<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property 'AWS_THREAT_INTELLIGENCE' $Reason
 */
class FlaggedIpAddressDetail extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string,
     *     Reason?: 'AWS_THREAT_INTELLIGENCE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
