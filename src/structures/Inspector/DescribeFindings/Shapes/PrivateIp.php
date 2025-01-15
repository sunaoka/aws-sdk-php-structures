<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $privateDnsName
 * @property string|null $privateIpAddress
 */
class PrivateIp extends Shape
{
    /**
     * @param array{
     *     privateDnsName?: string|null,
     *     privateIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
