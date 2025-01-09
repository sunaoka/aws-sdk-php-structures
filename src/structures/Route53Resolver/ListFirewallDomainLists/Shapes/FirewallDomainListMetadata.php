<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallDomainLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $CreatorRequestId
 * @property string $ManagedOwnerName
 */
class FirewallDomainListMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     CreatorRequestId?: string,
     *     ManagedOwnerName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
