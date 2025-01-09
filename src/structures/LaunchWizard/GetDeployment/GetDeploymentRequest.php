<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 */
class GetDeploymentRequest extends Request
{
    /**
     * @param array{deploymentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
