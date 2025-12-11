<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefitApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Catalog
 * @property string|null $Name
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $BenefitId
 * @property list<string>|null $Programs
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property 'PENDING_SUBMISSION'|'IN_REVIEW'|'ACTION_REQUIRED'|'APPROVED'|'REJECTED'|'CANCELED'|null $Status
 * @property string|null $Stage
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property array<string, string>|null $BenefitApplicationDetails
 * @property list<string>|null $AssociatedResources
 */
class BenefitApplicationSummary extends Shape
{
    /**
     * @param array{
     *     Catalog?: string|null,
     *     Name?: string|null,
     *     Id?: string|null,
     *     Arn?: string|null,
     *     BenefitId?: string|null,
     *     Programs?: list<string>|null,
     *     FulfillmentTypes?: list<'CREDITS'|'CASH'|'ACCESS'>|null,
     *     Status?: 'PENDING_SUBMISSION'|'IN_REVIEW'|'ACTION_REQUIRED'|'APPROVED'|'REJECTED'|'CANCELED'|null,
     *     Stage?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     BenefitApplicationDetails?: array<string, string>|null,
     *     AssociatedResources?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
