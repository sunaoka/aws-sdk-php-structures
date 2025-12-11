<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableIpamPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPolicyId
 * @property string|null $OrganizationTargetId
 */
class EnableIpamPolicyRequest extends Request
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
