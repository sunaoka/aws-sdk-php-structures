<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $deploymentId
 */
class GetDeploymentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     deploymentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
