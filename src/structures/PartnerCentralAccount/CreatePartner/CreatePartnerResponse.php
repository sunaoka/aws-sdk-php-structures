<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CreatePartner;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Arn
 * @property string $Id
 * @property string $LegalName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property Shapes\PartnerProfile $Profile
 * @property list<Shapes\PartnerDomain>|null $AwsTrainingCertificationEmailDomains
 * @property Shapes\AllianceLeadContact $AllianceLeadContact
 */
class CreatePartnerResponse extends Response
{
}
