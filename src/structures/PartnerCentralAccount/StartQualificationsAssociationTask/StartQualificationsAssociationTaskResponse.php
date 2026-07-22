<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartQualificationsAssociationTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Arn
 * @property string $Id
 * @property string $TaskId
 * @property 'IN_PROGRESS'|'SUCCEEDED' $Status
 * @property Shapes\QualificationsAssociationPartner $PrimaryPartner
 * @property \Aws\Api\DateTimeResult $StartedAt
 */
class StartQualificationsAssociationTaskResponse extends Response
{
}
