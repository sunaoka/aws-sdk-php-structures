<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallDomainLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $CreatorRequestId
 * @property string|null $ManagedOwnerName
 * @property 'THREAT'|'CONTENT'|'AUTOALLOWLIST'|null $ManagedListType
 * @property string|null $Category
 * @property string|null $FirewallRuleGroupId
 * @property string|null $FirewallThreatProtectionId
 * @property 'COMPLETE'|'COMPLETE_IMPORT_FAILED'|'IMPORTING'|'DELETING'|'UPDATING'|null $Status
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
     *     ManagedListType?: 'THREAT'|'CONTENT'|'AUTOALLOWLIST'|null,
     *     Category?: string|null,
     *     FirewallRuleGroupId?: string|null,
     *     FirewallThreatProtectionId?: string|null,
     *     Status?: 'COMPLETE'|'COMPLETE_IMPORT_FAILED'|'IMPORTING'|'DELETING'|'UPDATING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
