<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteContainerService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 */
class DeleteContainerServiceRequest extends Request
{
    /**
     * @param array{serviceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
