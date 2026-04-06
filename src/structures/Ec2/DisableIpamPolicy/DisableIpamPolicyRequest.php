<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableIpamPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPolicyId
 * @property string|null $OrganizationTargetId
 */
class DisableIpamPolicyRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPolicyId: string,
     *     OrganizationTargetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
