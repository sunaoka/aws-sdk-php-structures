<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverVersionEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 */
class IpamPrefixListResolverVersionEntry extends Shape
{
    /**
     * @param array{Cidr?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
