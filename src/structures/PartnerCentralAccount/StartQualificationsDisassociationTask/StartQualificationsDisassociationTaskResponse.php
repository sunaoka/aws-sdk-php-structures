<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartQualificationsDisassociationTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Arn
 * @property string $Id
 * @property string $TaskId
 * @property 'IN_PROGRESS'|'SUCCEEDED' $Status
 * @property Shapes\QualificationsAssociationPartner $AssociatedPartner
 * @property \Aws\Api\DateTimeResult $StartedAt
 */
class StartQualificationsDisassociationTaskResponse extends Response
{
}
