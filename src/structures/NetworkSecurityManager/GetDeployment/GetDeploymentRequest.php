<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentIdentifier
 */
class GetDeploymentRequest extends Request
{
    /**
     * @param array{deploymentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
