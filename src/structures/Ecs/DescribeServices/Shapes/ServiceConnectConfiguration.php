<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string|null $namespace
 * @property list<ServiceConnectService>|null $services
 * @property LogConfiguration|null $logConfiguration
 * @property ServiceConnectAccessLogConfiguration|null $accessLogConfiguration
 */
class ServiceConnectConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     namespace?: string|null,
     *     services?: list<ServiceConnectService>|null,
     *     logConfiguration?: LogConfiguration|null,
     *     accessLogConfiguration?: ServiceConnectAccessLogConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
