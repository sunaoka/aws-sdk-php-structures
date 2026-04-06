<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Catalog
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property list<string>|null $Programs
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property Shapes\Document|null $BenefitRequestSchema
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 */
class GetBenefitResponse extends Response
{
}
