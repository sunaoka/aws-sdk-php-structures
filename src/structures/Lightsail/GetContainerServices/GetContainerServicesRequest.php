<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $serviceName
 */
class GetContainerServicesRequest extends Request
{
    /**
     * @param array{serviceName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
