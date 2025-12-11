<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateExpressGatewayService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionRoleArn
 * @property string $infrastructureRoleArn
 * @property string|null $serviceName
 * @property string|null $cluster
 * @property string|null $healthCheckPath
 * @property Shapes\ExpressGatewayContainer $primaryContainer
 * @property string|null $taskRoleArn
 * @property Shapes\ExpressGatewayServiceNetworkConfiguration|null $networkConfiguration
 * @property string|null $cpu
 * @property string|null $memory
 * @property Shapes\ExpressGatewayScalingTarget|null $scalingTarget
 * @property list<Shapes\Tag>|null $tags
 */
class CreateExpressGatewayServiceRequest extends Request
{
    /**
     * @param array{
     *     executionRoleArn: string,
     *     infrastructureRoleArn: string,
     *     serviceName?: string|null,
     *     cluster?: string|null,
     *     healthCheckPath?: string|null,
     *     primaryContainer: Shapes\ExpressGatewayContainer,
     *     taskRoleArn?: string|null,
     *     networkConfiguration?: Shapes\ExpressGatewayServiceNetworkConfiguration|null,
     *     cpu?: string|null,
     *     memory?: string|null,
     *     scalingTarget?: Shapes\ExpressGatewayScalingTarget|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
