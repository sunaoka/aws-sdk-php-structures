<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServicePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $ServiceId
 * @property list<string>|null $AddAllowedPrincipals
 * @property list<string>|null $RemoveAllowedPrincipals
 * @property 'vpc-endpoint'|'transit-gateway-attachment'|null $PermissionType
 */
class ModifyVpcEndpointServicePermissionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceId: string,
     *     AddAllowedPrincipals?: list<string>|null,
     *     RemoveAllowedPrincipals?: list<string>|null,
     *     PermissionType?: 'vpc-endpoint'|'transit-gateway-attachment'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
