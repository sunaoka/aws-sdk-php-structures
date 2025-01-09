<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeManagedPrefixLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrefixListId
 * @property string $AddressFamily
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'restore-in-progress'|'restore-complete'|'restore-failed'|'delete-in-progress'|'delete-complete'|'delete-failed' $State
 * @property string $StateMessage
 * @property string $PrefixListArn
 * @property string $PrefixListName
 * @property int $MaxEntries
 * @property int $Version
 * @property list<Tag> $Tags
 * @property string $OwnerId
 */
class ManagedPrefixList extends Shape
{
    /**
     * @param array{
     *     PrefixListId?: string,
     *     AddressFamily?: string,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'restore-in-progress'|'restore-complete'|'restore-failed'|'delete-in-progress'|'delete-complete'|'delete-failed',
     *     StateMessage?: string,
     *     PrefixListArn?: string,
     *     PrefixListName?: string,
     *     MaxEntries?: int,
     *     Version?: int,
     *     Tags?: list<Tag>,
     *     OwnerId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
