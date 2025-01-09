<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\GetDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceName
 * @property string $DeviceFleetName
 */
class GetDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     DeviceName: string,
     *     DeviceFleetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
