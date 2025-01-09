<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyManagedPrefixList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PrefixListId
 * @property int $CurrentVersion
 * @property string $PrefixListName
 * @property list<Shapes\AddPrefixListEntry> $AddEntries
 * @property list<Shapes\RemovePrefixListEntry> $RemoveEntries
 * @property int $MaxEntries
 */
class ModifyManagedPrefixListRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PrefixListId: string,
     *     CurrentVersion?: int,
     *     PrefixListName?: string,
     *     AddEntries?: list<Shapes\AddPrefixListEntry>,
     *     RemoveEntries?: list<Shapes\RemovePrefixListEntry>,
     *     MaxEntries?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
