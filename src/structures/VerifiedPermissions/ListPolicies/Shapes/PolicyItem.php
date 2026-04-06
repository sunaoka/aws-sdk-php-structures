<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyStoreId
 * @property string $policyId
 * @property 'STATIC'|'TEMPLATE_LINKED' $policyType
 * @property EntityIdentifier|null $principal
 * @property EntityIdentifier|null $resource
 * @property PolicyDefinitionItem $definition
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 */
class PolicyItem extends Shape
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyId: string,
     *     policyType: 'STATIC'|'TEMPLATE_LINKED',
     *     principal?: EntityIdentifier|null,
     *     resource?: EntityIdentifier|null,
     *     definition: PolicyDefinitionItem,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     lastUpdatedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
