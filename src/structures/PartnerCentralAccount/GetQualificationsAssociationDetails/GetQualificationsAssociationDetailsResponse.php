<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetQualificationsAssociationDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Arn
 * @property string $Id
 * @property 'ASSOCIATED'|'NOT_ASSOCIATED' $Status
 * @property Shapes\QualificationsAssociationPartner|null $PrimaryPartner
 * @property list<Shapes\QualificationsAssociationPartner>|null $AssociatedPartners
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetQualificationsAssociationDetailsResponse extends Response
{
}
