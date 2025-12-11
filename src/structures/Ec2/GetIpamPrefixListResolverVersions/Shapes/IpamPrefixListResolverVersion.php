<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Version
 */
class IpamPrefixListResolverVersion extends Shape
{
    /**
     * @param array{Version?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
