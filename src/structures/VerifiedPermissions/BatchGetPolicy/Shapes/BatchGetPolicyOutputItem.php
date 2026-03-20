<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchGetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyStoreId
 * @property string $policyId
 * @property 'STATIC'|'TEMPLATE_LINKED' $policyType
 * @property PolicyDefinitionDetail $definition
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property string|null $name
 */
class BatchGetPolicyOutputItem extends Shape
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyId: string,
     *     policyType: 'STATIC'|'TEMPLATE_LINKED',
     *     definition: PolicyDefinitionDetail,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     lastUpdatedDate: \Aws\Api\DateTimeResult,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
