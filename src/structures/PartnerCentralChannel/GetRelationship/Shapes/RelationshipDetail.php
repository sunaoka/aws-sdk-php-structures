<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\GetRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $revision
 * @property string|null $catalog
 * @property 'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL'|'MANAGED_SERVICES_END_CUSTOMER'|null $associationType
 * @property string|null $programManagementAccountId
 * @property string|null $associatedAccountId
 * @property string|null $displayName
 * @property 'DISTRIBUTOR'|'END_CUSTOMER'|'SOLUTION_PROVIDER'|null $resaleAccountModel
 * @property 'COMMERCIAL'|'GOVERNMENT'|'GOVERNMENT_EXCEPTION'|null $sector
 * @property 'ENTIRE_ORGANIZATION'|'SPECIFIC_MEMBER_ACCOUNTS'|null $accountScope
 * @property string|null $channelContractId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 */
class RelationshipDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     revision?: string|null,
     *     catalog?: string|null,
     *     associationType?: 'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL'|'MANAGED_SERVICES_END_CUSTOMER'|null,
     *     programManagementAccountId?: string|null,
     *     associatedAccountId?: string|null,
     *     displayName?: string|null,
     *     resaleAccountModel?: 'DISTRIBUTOR'|'END_CUSTOMER'|'SOLUTION_PROVIDER'|null,
     *     sector?: 'COMMERCIAL'|'GOVERNMENT'|'GOVERNMENT_EXCEPTION'|null,
     *     accountScope?: 'ENTIRE_ORGANIZATION'|'SPECIFIC_MEMBER_ACCOUNTS'|null,
     *     channelContractId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     endDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
