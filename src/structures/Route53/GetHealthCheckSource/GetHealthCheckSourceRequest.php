<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HealthCheckSourceId
 */
class GetHealthCheckSourceRequest extends Request
{
    /**
     * @param array{HealthCheckSourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
