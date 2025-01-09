<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 */
class GetContainerServicesRequest extends Request
{
    /**
     * @param array{serviceName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
