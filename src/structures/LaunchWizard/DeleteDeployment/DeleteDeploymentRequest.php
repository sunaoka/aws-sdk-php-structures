<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\DeleteDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 */
class DeleteDeploymentRequest extends Request
{
    /**
     * @param array{deploymentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
