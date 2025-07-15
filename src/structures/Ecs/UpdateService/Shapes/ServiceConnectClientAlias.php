<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $port
 * @property string|null $dnsName
 * @property ServiceConnectTestTrafficRules|null $testTrafficRules
 */
class ServiceConnectClientAlias extends Shape
{
    /**
     * @param array{
     *     port: int<0, 65535>,
     *     dnsName?: string|null,
     *     testTrafficRules?: ServiceConnectTestTrafficRules|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
