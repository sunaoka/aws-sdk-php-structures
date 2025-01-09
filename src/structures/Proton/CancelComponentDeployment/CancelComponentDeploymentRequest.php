<?php

namespace Sunaoka\Aws\Structures\Proton\CancelComponentDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentName
 */
class CancelComponentDeploymentRequest extends Request
{
    /**
     * @param array{componentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
