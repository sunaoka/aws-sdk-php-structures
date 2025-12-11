<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateExpressGatewayService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string|null $executionRoleArn
 * @property string|null $healthCheckPath
 * @property Shapes\ExpressGatewayContainer|null $primaryContainer
 * @property string|null $taskRoleArn
 * @property Shapes\ExpressGatewayServiceNetworkConfiguration|null $networkConfiguration
 * @property string|null $cpu
 * @property string|null $memory
 * @property Shapes\ExpressGatewayScalingTarget|null $scalingTarget
 */
class UpdateExpressGatewayServiceRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     executionRoleArn?: string|null,
     *     healthCheckPath?: string|null,
     *     primaryContainer?: Shapes\ExpressGatewayContainer|null,
     *     taskRoleArn?: string|null,
     *     networkConfiguration?: Shapes\ExpressGatewayServiceNetworkConfiguration|null,
     *     cpu?: string|null,
     *     memory?: string|null,
     *     scalingTarget?: Shapes\ExpressGatewayScalingTarget|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
