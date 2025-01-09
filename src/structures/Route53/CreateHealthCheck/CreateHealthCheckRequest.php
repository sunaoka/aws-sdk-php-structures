<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHealthCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallerReference
 * @property Shapes\HealthCheckConfig $HealthCheckConfig
 */
class CreateHealthCheckRequest extends Request
{
    /**
     * @param array{
     *     CallerReference: string,
     *     HealthCheckConfig: Shapes\HealthCheckConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
