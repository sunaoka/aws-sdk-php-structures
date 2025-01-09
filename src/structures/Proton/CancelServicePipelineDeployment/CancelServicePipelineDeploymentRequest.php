<?php

namespace Sunaoka\Aws\Structures\Proton\CancelServicePipelineDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 */
class CancelServicePipelineDeploymentRequest extends Request
{
    /**
     * @param array{serviceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
