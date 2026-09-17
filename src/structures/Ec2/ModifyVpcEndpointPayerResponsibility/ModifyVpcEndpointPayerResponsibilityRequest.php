<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointPayerResponsibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ServiceId
 * @property string $VpcEndpointId
 * @property 'vpc-endpoint-account'|'resource-gateway-account'|'vpc-endpoint-service-account' $PayerResponsibility
 * @property 'vpc-endpoint-charges'|'resource-gateway-charges' $Scope
 */
class ModifyVpcEndpointPayerResponsibilityRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceId?: string|null,
     *     VpcEndpointId: string,
     *     PayerResponsibility: 'vpc-endpoint-account'|'resource-gateway-account'|'vpc-endpoint-service-account',
     *     Scope: 'vpc-endpoint-charges'|'resource-gateway-charges'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
