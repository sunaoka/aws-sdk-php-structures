<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\DeleteDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentIdentifier
 */
class DeleteDeploymentRequest extends Request
{
    /**
     * @param array{deploymentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
