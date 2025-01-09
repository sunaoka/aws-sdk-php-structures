<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInputSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 */
class InputWhitelistRule extends Shape
{
    /**
     * @param array{Cidr?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
