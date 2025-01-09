<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamScopeId
 * @property string $Description
 */
class ModifyIpamScopeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamScopeId: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
