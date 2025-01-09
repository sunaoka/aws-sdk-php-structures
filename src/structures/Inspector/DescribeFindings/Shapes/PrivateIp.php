<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $privateDnsName
 * @property string $privateIpAddress
 */
class PrivateIp extends Shape
{
    /**
     * @param array{
     *     privateDnsName?: string,
     *     privateIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
