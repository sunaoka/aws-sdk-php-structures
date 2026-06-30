<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointPayerResponsibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ServiceId
 * @property string $VpcEndpointId
 * @property 'vpc-endpoint-account'|'vpc-endpoint-service-account' $PayerResponsibility
 * @property 'vpc-endpoint-charges' $Scope
 */
class ModifyVpcEndpointPayerResponsibilityRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceId?: string|null,
     *     VpcEndpointId: string,
     *     PayerResponsibility: 'vpc-endpoint-account'|'vpc-endpoint-service-account',
     *     Scope: 'vpc-endpoint-charges'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
