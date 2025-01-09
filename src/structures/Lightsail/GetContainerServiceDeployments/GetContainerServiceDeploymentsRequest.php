<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServiceDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 */
class GetContainerServiceDeploymentsRequest extends Request
{
    /**
     * @param array{serviceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
