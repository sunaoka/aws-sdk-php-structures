<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServicePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ServiceId
 * @property list<string> $AddAllowedPrincipals
 * @property list<string> $RemoveAllowedPrincipals
 */
class ModifyVpcEndpointServicePermissionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceId: string,
     *     AddAllowedPrincipals?: list<string>,
     *     RemoveAllowedPrincipals?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
