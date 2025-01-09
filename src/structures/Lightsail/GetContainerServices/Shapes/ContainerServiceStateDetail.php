<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING_SYSTEM_RESOURCES'|'CREATING_NETWORK_INFRASTRUCTURE'|'PROVISIONING_CERTIFICATE'|'PROVISIONING_SERVICE'|'CREATING_DEPLOYMENT'|'EVALUATING_HEALTH_CHECK'|'ACTIVATING_DEPLOYMENT'|'CERTIFICATE_LIMIT_EXCEEDED'|'UNKNOWN_ERROR' $code
 * @property string $message
 */
class ContainerServiceStateDetail extends Shape
{
    /**
     * @param array{
     *     code?: 'CREATING_SYSTEM_RESOURCES'|'CREATING_NETWORK_INFRASTRUCTURE'|'PROVISIONING_CERTIFICATE'|'PROVISIONING_SERVICE'|'CREATING_DEPLOYMENT'|'EVALUATING_HEALTH_CHECK'|'ACTIVATING_DEPLOYMENT'|'CERTIFICATE_LIMIT_EXCEEDED'|'UNKNOWN_ERROR',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
