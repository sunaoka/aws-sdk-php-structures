<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 */
class DirectoryServiceAuthentication extends Shape
{
    /**
     * @param array{DirectoryId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
