<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 */
class Phase1EncryptionAlgorithmsListValue extends Shape
{
    /**
     * @param array{Value?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
