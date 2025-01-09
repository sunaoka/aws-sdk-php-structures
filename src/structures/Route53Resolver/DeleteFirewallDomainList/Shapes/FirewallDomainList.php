<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallDomainList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property int $DomainCount
 * @property 'COMPLETE'|'COMPLETE_IMPORT_FAILED'|'IMPORTING'|'DELETING'|'UPDATING' $Status
 * @property string $StatusMessage
 * @property string $ManagedOwnerName
 * @property string $CreatorRequestId
 * @property string $CreationTime
 * @property string $ModificationTime
 */
class FirewallDomainList extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     DomainCount?: int,
     *     Status?: 'COMPLETE'|'COMPLETE_IMPORT_FAILED'|'IMPORTING'|'DELETING'|'UPDATING',
     *     StatusMessage?: string,
     *     ManagedOwnerName?: string,
     *     CreatorRequestId?: string,
     *     CreationTime?: string,
     *     ModificationTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
