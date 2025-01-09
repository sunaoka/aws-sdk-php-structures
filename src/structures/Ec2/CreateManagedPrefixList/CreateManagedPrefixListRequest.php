<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateManagedPrefixList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PrefixListName
 * @property list<Shapes\AddPrefixListEntry> $Entries
 * @property int $MaxEntries
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $AddressFamily
 * @property string $ClientToken
 */
class CreateManagedPrefixListRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PrefixListName: string,
     *     Entries?: list<Shapes\AddPrefixListEntry>,
     *     MaxEntries: int,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     AddressFamily: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
