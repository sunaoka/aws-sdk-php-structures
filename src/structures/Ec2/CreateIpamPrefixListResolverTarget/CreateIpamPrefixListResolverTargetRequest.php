<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPrefixListResolverTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPrefixListResolverId
 * @property string $PrefixListId
 * @property string $PrefixListRegion
 * @property int|null $DesiredVersion
 * @property bool $TrackLatestVersion
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 */
class CreateIpamPrefixListResolverTargetRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPrefixListResolverId: string,
     *     PrefixListId: string,
     *     PrefixListRegion: string,
     *     DesiredVersion?: int|null,
     *     TrackLatestVersion: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
