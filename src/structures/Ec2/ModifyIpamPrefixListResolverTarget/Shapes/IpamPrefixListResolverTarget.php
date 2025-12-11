<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPrefixListResolverTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpamPrefixListResolverTargetId
 * @property string|null $IpamPrefixListResolverTargetArn
 * @property string|null $IpamPrefixListResolverId
 * @property string|null $OwnerId
 * @property string|null $PrefixListId
 * @property string|null $PrefixListRegion
 * @property int|null $DesiredVersion
 * @property int|null $LastSyncedVersion
 * @property bool|null $TrackLatestVersion
 * @property string|null $StateMessage
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'sync-in-progress'|'sync-complete'|'sync-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null $State
 * @property list<Tag>|null $Tags
 */
class IpamPrefixListResolverTarget extends Shape
{
    /**
     * @param array{
     *     IpamPrefixListResolverTargetId?: string|null,
     *     IpamPrefixListResolverTargetArn?: string|null,
     *     IpamPrefixListResolverId?: string|null,
     *     OwnerId?: string|null,
     *     PrefixListId?: string|null,
     *     PrefixListRegion?: string|null,
     *     DesiredVersion?: int|null,
     *     LastSyncedVersion?: int|null,
     *     TrackLatestVersion?: bool|null,
     *     StateMessage?: string|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'sync-in-progress'|'sync-complete'|'sync-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
