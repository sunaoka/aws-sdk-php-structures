<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property string $VerifiedAccessGroupId
 * @property Shapes\ModifyVerifiedAccessEndpointLoadBalancerOptions $LoadBalancerOptions
 * @property Shapes\ModifyVerifiedAccessEndpointEniOptions $NetworkInterfaceOptions
 * @property string $Description
 * @property string $ClientToken
 * @property bool $DryRun
 * @property Shapes\ModifyVerifiedAccessEndpointRdsOptions $RdsOptions
 * @property Shapes\ModifyVerifiedAccessEndpointCidrOptions $CidrOptions
 */
class ModifyVerifiedAccessEndpointRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     VerifiedAccessGroupId?: string,
     *     LoadBalancerOptions?: Shapes\ModifyVerifiedAccessEndpointLoadBalancerOptions,
     *     NetworkInterfaceOptions?: Shapes\ModifyVerifiedAccessEndpointEniOptions,
     *     Description?: string,
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     RdsOptions?: Shapes\ModifyVerifiedAccessEndpointRdsOptions,
     *     CidrOptions?: Shapes\ModifyVerifiedAccessEndpointCidrOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
