<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string $Description
 * @property bool $DryRun
 * @property string $ClientToken
 * @property string $CidrEndpointsCustomSubDomain
 */
class ModifyVerifiedAccessInstanceRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     Description?: string,
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     CidrEndpointsCustomSubDomain?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
