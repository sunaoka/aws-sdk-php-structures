<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPrefixListResolverTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPrefixListResolverTargetId
 * @property int|null $DesiredVersion
 * @property bool|null $TrackLatestVersion
 * @property string|null $ClientToken
 */
class ModifyIpamPrefixListResolverTargetRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPrefixListResolverTargetId: string,
     *     DesiredVersion?: int|null,
     *     TrackLatestVersion?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
