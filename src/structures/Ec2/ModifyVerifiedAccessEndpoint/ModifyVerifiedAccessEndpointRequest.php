<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property string|null $VerifiedAccessGroupId
 * @property Shapes\ModifyVerifiedAccessEndpointLoadBalancerOptions|null $LoadBalancerOptions
 * @property Shapes\ModifyVerifiedAccessEndpointEniOptions|null $NetworkInterfaceOptions
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class ModifyVerifiedAccessEndpointRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     VerifiedAccessGroupId?: string|null,
     *     LoadBalancerOptions?: Shapes\ModifyVerifiedAccessEndpointLoadBalancerOptions|null,
     *     NetworkInterfaceOptions?: Shapes\ModifyVerifiedAccessEndpointEniOptions|null,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
