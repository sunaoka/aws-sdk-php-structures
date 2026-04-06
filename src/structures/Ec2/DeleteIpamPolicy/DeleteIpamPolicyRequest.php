<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPolicyId
 */
class DeleteIpamPolicyRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
