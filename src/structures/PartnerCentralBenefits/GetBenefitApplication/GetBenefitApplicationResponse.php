<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Catalog
 * @property string|null $BenefitId
 * @property string|null $Name
 * @property string|null $Description
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property Shapes\Document|null $BenefitApplicationDetails
 * @property list<string>|null $Programs
 * @property 'PENDING_SUBMISSION'|'IN_REVIEW'|'ACTION_REQUIRED'|'APPROVED'|'REJECTED'|'CANCELED'|null $Status
 * @property string|null $Stage
 * @property string|null $StatusReason
 * @property string|null $StatusReasonCode
 * @property list<string>|null $StatusReasonCodes
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Revision
 * @property list<string>|null $AssociatedResources
 * @property list<Shapes\Contact>|null $PartnerContacts
 * @property list<Shapes\FileDetail>|null $FileDetails
 */
class GetBenefitApplicationResponse extends Response
{
}
