<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $portName
 * @property string $discoveryName
 * @property list<ServiceConnectClientAlias> $clientAliases
 * @property int<0, 65535> $ingressPortOverride
 * @property TimeoutConfiguration $timeout
 * @property ServiceConnectTlsConfiguration $tls
 */
class ServiceConnectService extends Shape
{
    /**
     * @param array{
     *     portName: string,
     *     discoveryName?: string,
     *     clientAliases?: list<ServiceConnectClientAlias>,
     *     ingressPortOverride?: int<0, 65535>,
     *     timeout?: TimeoutConfiguration,
     *     tls?: ServiceConnectTlsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
