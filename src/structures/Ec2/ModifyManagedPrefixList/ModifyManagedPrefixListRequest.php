<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyManagedPrefixList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $PrefixListId
 * @property int|null $CurrentVersion
 * @property string|null $PrefixListName
 * @property list<Shapes\AddPrefixListEntry>|null $AddEntries
 * @property list<Shapes\RemovePrefixListEntry>|null $RemoveEntries
 * @property int|null $MaxEntries
 * @property bool|null $IpamPrefixListResolverSyncEnabled
 */
class ModifyManagedPrefixListRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PrefixListId: string,
     *     CurrentVersion?: int|null,
     *     PrefixListName?: string|null,
     *     AddEntries?: list<Shapes\AddPrefixListEntry>|null,
     *     RemoveEntries?: list<Shapes\RemovePrefixListEntry>|null,
     *     MaxEntries?: int|null,
     *     IpamPrefixListResolverSyncEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
