<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateManagedPrefixList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $PrefixListName
 * @property list<Shapes\AddPrefixListEntry>|null $Entries
 * @property int $MaxEntries
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string $AddressFamily
 * @property string|null $ClientToken
 */
class CreateManagedPrefixListRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PrefixListName: string,
     *     Entries?: list<Shapes\AddPrefixListEntry>|null,
     *     MaxEntries: int,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     AddressFamily: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
