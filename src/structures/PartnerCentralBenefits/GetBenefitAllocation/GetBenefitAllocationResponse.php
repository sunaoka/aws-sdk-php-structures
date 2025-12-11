<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Catalog
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|'FULFILLED'|null $Status
 * @property string|null $StatusReason
 * @property string|null $BenefitApplicationId
 * @property string|null $BenefitId
 * @property 'CREDITS'|'CASH'|'ACCESS'|null $FulfillmentType
 * @property list<string>|null $ApplicableBenefitIds
 * @property Shapes\FulfillmentDetails|null $FulfillmentDetail
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $StartsAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 */
class GetBenefitAllocationResponse extends Response
{
}
