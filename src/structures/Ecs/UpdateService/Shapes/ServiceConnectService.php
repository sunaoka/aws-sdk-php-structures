<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $portName
 * @property string|null $discoveryName
 * @property list<ServiceConnectClientAlias>|null $clientAliases
 * @property int<0, 65535>|null $ingressPortOverride
 * @property TimeoutConfiguration|null $timeout
 * @property ServiceConnectTlsConfiguration|null $tls
 */
class ServiceConnectService extends Shape
{
    /**
     * @param array{
     *     portName: string,
     *     discoveryName?: string|null,
     *     clientAliases?: list<ServiceConnectClientAlias>|null,
     *     ingressPortOverride?: int<0, 65535>|null,
     *     timeout?: TimeoutConfiguration|null,
     *     tls?: ServiceConnectTlsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
