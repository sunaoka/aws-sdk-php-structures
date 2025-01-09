<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfaceId
 * @property string $NetworkLoadBalancerArn
 * @property string $Description
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $ClientToken
 * @property string $GatewayLoadBalancerEndpointId
 */
class CreateTrafficMirrorTargetRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfaceId?: string,
     *     NetworkLoadBalancerArn?: string,
     *     Description?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     GatewayLoadBalancerEndpointId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
