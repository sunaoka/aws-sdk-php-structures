<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6CidrBlock
 */
class VpcInfoIpv6CidrBlockSetDetails extends Shape
{
    /**
     * @param array{Ipv6CidrBlock?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
