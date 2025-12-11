<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPrefixListResolverTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPrefixListResolverTargetId
 */
class DeleteIpamPrefixListResolverTargetRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPrefixListResolverTargetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
