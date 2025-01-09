<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyStoreId
 * @property string $policyId
 * @property 'STATIC'|'TEMPLATE_LINKED' $policyType
 * @property EntityIdentifier $principal
 * @property EntityIdentifier $resource
 * @property list<ActionIdentifier> $actions
 * @property PolicyDefinitionItem $definition
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property 'Permit'|'Forbid' $effect
 */
class PolicyItem extends Shape
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyId: string,
     *     policyType: 'STATIC'|'TEMPLATE_LINKED',
     *     principal?: EntityIdentifier,
     *     resource?: EntityIdentifier,
     *     actions?: list<ActionIdentifier>,
     *     definition: PolicyDefinitionItem,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     lastUpdatedDate: \Aws\Api\DateTimeResult,
     *     effect?: 'Permit'|'Forbid'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
