<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $revision
 * @property string|null $catalog
 * @property 'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL'|null $associationType
 * @property string|null $programManagementAccountId
 * @property string|null $associatedAccountId
 * @property string|null $displayName
 * @property 'COMMERCIAL'|'GOVERNMENT'|'GOVERNMENT_EXCEPTION'|null $sector
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $startDate
 */
class RelationshipSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     revision?: string|null,
     *     catalog?: string|null,
     *     associationType?: 'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL'|null,
     *     programManagementAccountId?: string|null,
     *     associatedAccountId?: string|null,
     *     displayName?: string|null,
     *     sector?: 'COMMERCIAL'|'GOVERNMENT'|'GOVERNMENT_EXCEPTION'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     startDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
