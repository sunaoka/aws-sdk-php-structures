<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $port
 * @property string $dnsName
 */
class ServiceConnectClientAlias extends Shape
{
    /**
     * @param array{
     *     port: int,
     *     dnsName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
