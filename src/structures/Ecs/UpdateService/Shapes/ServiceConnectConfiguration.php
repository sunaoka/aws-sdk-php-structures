<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string|null $namespace
 * @property list<ServiceConnectService>|null $services
 * @property LogConfiguration|null $logConfiguration
 */
class ServiceConnectConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     namespace?: string|null,
     *     services?: list<ServiceConnectService>|null,
     *     logConfiguration?: LogConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
