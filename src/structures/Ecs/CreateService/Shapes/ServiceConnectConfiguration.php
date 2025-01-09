<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $namespace
 * @property list<ServiceConnectService> $services
 * @property LogConfiguration $logConfiguration
 */
class ServiceConnectConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     namespace?: string,
     *     services?: list<ServiceConnectService>,
     *     logConfiguration?: LogConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
