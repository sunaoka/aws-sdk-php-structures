<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property string|null $CidrEndpointsCustomSubDomain
 */
class ModifyVerifiedAccessInstanceRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     CidrEndpointsCustomSubDomain?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
