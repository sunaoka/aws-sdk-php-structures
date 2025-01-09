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
     *     lastUpdatedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
