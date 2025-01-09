<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamScopeId
 */
class DeleteIpamScopeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamScopeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
