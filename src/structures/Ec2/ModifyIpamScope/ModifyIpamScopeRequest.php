<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamScopeId
 * @property string|null $Description
 * @property Shapes\ExternalAuthorityConfiguration|null $ExternalAuthorityConfiguration
 * @property bool|null $RemoveExternalAuthorityConfiguration
 */
class ModifyIpamScopeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamScopeId: string,
     *     Description?: string|null,
     *     ExternalAuthorityConfiguration?: Shapes\ExternalAuthorityConfiguration|null,
     *     RemoveExternalAuthorityConfiguration?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
