<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property 'AWS_THREAT_INTELLIGENCE'|null $Reason
 */
class FlaggedIpAddressDetail extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     Reason?: 'AWS_THREAT_INTELLIGENCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
