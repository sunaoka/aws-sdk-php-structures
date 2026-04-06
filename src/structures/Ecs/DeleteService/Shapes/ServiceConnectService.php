<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $portName
 * @property string|null $discoveryName
 * @property list<ServiceConnectClientAlias>|null $clientAliases
 * @property int<0, 65535>|null $ingressPortOverride
 */
class ServiceConnectService extends Shape
{
    /**
     * @param array{
     *     portName: string,
     *     discoveryName?: string|null,
     *     clientAliases?: list<ServiceConnectClientAlias>|null,
     *     ingressPortOverride?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
