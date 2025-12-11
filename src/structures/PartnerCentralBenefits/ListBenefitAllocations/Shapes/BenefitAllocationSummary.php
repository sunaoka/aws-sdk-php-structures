<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefitAllocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Catalog
 * @property string|null $Arn
 * @property 'ACTIVE'|'INACTIVE'|'FULFILLED'|null $Status
 * @property string|null $StatusReason
 * @property string|null $Name
 * @property string|null $BenefitId
 * @property string|null $BenefitApplicationId
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property list<string>|null $ApplicableBenefitIds
 */
class BenefitAllocationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Catalog?: string|null,
     *     Arn?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|'FULFILLED'|null,
     *     StatusReason?: string|null,
     *     Name?: string|null,
     *     BenefitId?: string|null,
     *     BenefitApplicationId?: string|null,
     *     FulfillmentTypes?: list<'CREDITS'|'CASH'|'ACCESS'>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     ApplicableBenefitIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
