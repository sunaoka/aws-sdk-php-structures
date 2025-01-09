<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CancelDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 */
class CancelDeploymentRequest extends Request
{
    /**
     * @param array{deploymentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
