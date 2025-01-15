<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NetworkInterfaceId
 * @property string|null $NetworkLoadBalancerArn
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property string|null $GatewayLoadBalancerEndpointId
 */
class CreateTrafficMirrorTargetRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfaceId?: string|null,
     *     NetworkLoadBalancerArn?: string|null,
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     GatewayLoadBalancerEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
