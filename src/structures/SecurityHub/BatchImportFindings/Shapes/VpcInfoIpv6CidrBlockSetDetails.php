<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6CidrBlock
 */
class VpcInfoIpv6CidrBlockSetDetails extends Shape
{
    /**
     * @param array{Ipv6CidrBlock?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
