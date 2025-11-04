<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteManagedPrefixList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrefixListId
 * @property string|null $AddressFamily
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'restore-in-progress'|'restore-complete'|'restore-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null $State
 * @property string|null $StateMessage
 * @property string|null $PrefixListArn
 * @property string|null $PrefixListName
 * @property int|null $MaxEntries
 * @property int|null $Version
 * @property list<Tag>|null $Tags
 * @property string|null $OwnerId
 * @property string|null $IpamPrefixListResolverTargetId
 * @property bool|null $IpamPrefixListResolverSyncEnabled
 */
class ManagedPrefixList extends Shape
{
    /**
     * @param array{
     *     PrefixListId?: string|null,
     *     AddressFamily?: string|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'restore-in-progress'|'restore-complete'|'restore-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null,
     *     StateMessage?: string|null,
     *     PrefixListArn?: string|null,
     *     PrefixListName?: string|null,
     *     MaxEntries?: int|null,
     *     Version?: int|null,
     *     Tags?: list<Tag>|null,
     *     OwnerId?: string|null,
     *     IpamPrefixListResolverTargetId?: string|null,
     *     IpamPrefixListResolverSyncEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
