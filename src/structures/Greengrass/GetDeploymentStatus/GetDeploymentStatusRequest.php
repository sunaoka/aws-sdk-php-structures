<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeploymentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeploymentId
 * @property string $GroupId
 */
class GetDeploymentStatusRequest extends Request
{
    /**
     * @param array{
     *     DeploymentId: string,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
