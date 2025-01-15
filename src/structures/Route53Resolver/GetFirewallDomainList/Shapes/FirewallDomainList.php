<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallDomainList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property int|null $DomainCount
 * @property 'COMPLETE'|'COMPLETE_IMPORT_FAILED'|'IMPORTING'|'DELETING'|'UPDATING'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $ManagedOwnerName
 * @property string|null $CreatorRequestId
 * @property string|null $CreationTime
 * @property string|null $ModificationTime
 */
class FirewallDomainList extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     DomainCount?: int|null,
     *     Status?: 'COMPLETE'|'COMPLETE_IMPORT_FAILED'|'IMPORTING'|'DELETING'|'UPDATING'|null,
     *     StatusMessage?: string|null,
     *     ManagedOwnerName?: string|null,
     *     CreatorRequestId?: string|null,
     *     CreationTime?: string|null,
     *     ModificationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
