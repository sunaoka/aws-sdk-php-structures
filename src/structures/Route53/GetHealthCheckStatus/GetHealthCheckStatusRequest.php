<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HealthCheckId
 */
class GetHealthCheckStatusRequest extends Request
{
    /**
     * @param array{HealthCheckId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
