<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListAnycastIpLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<IpamCidrConfig> $IpamCidrConfigs
 */
class IpamConfig extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     IpamCidrConfigs: list<IpamCidrConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
