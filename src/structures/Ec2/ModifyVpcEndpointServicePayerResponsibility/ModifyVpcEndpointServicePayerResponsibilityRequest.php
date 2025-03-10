<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServicePayerResponsibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $ServiceId
 * @property 'ServiceOwner' $PayerResponsibility
 */
class ModifyVpcEndpointServicePayerResponsibilityRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceId: string,
     *     PayerResponsibility: 'ServiceOwner'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
