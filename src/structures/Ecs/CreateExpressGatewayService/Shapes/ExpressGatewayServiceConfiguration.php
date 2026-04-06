<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceRevisionArn
 * @property string|null $executionRoleArn
 * @property string|null $taskRoleArn
 * @property string|null $cpu
 * @property string|null $memory
 * @property ExpressGatewayServiceNetworkConfiguration|null $networkConfiguration
 * @property string|null $healthCheckPath
 * @property ExpressGatewayContainer|null $primaryContainer
 * @property ExpressGatewayScalingTarget|null $scalingTarget
 * @property list<IngressPathSummary>|null $ingressPaths
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class ExpressGatewayServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     serviceRevisionArn?: string|null,
     *     executionRoleArn?: string|null,
     *     taskRoleArn?: string|null,
     *     cpu?: string|null,
     *     memory?: string|null,
     *     networkConfiguration?: ExpressGatewayServiceNetworkConfiguration|null,
     *     healthCheckPath?: string|null,
     *     primaryContainer?: ExpressGatewayContainer|null,
     *     scalingTarget?: ExpressGatewayScalingTarget|null,
     *     ingressPaths?: list<IngressPathSummary>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
