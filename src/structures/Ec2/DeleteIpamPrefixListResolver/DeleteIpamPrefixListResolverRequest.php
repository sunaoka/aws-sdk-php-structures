<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPrefixListResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPrefixListResolverId
 */
class DeleteIpamPrefixListResolverRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPrefixListResolverId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
