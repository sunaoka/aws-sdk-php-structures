<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteHealthCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HealthCheckId
 */
class DeleteHealthCheckRequest extends Request
{
    /**
     * @param array{HealthCheckId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
