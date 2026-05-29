<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallDomainLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $CreatorRequestId
 * @property string|null $ManagedOwnerName
 * @property 'THREAT'|'CONTENT'|null $ManagedListType
 * @property string|null $Category
 */
class FirewallDomainListMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     CreatorRequestId?: string|null,
     *     ManagedOwnerName?: string|null,
     *     ManagedListType?: 'THREAT'|'CONTENT'|null,
     *     Category?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
