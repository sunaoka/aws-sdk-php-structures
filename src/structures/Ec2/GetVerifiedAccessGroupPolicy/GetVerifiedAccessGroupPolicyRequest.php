<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property bool|null $DryRun
 */
class GetVerifiedAccessGroupPolicyRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
