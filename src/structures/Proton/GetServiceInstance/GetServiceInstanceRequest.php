<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $serviceName
 */
class GetServiceInstanceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
