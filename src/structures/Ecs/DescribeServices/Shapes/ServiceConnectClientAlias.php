<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $port
 * @property string $dnsName
 */
class ServiceConnectClientAlias extends Shape
{
    /**
     * @param array{
     *     port: int<0, 65535>,
     *     dnsName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
