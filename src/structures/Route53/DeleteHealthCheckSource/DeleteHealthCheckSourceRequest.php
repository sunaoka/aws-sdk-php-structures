<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteHealthCheckSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HealthCheckSourceId
 */
class DeleteHealthCheckSourceRequest extends Request
{
    /**
     * @param array{HealthCheckSourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
