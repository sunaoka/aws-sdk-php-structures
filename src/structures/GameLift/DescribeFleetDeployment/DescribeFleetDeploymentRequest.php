<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $DeploymentId
 */
class DescribeFleetDeploymentRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     DeploymentId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
