<?php

namespace Sunaoka\Aws\Structures\Proton\CancelEnvironmentDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentName
 */
class CancelEnvironmentDeploymentRequest extends Request
{
    /**
     * @param array{environmentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
