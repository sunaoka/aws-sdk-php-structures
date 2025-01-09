<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshotJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Catalog
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $EngagementId
 * @property string $Id
 * @property string $LastFailure
 * @property \Aws\Api\DateTimeResult $LastSuccessfulExecutionDate
 * @property string $ResourceArn
 * @property string $ResourceId
 * @property string $ResourceSnapshotTemplateName
 * @property 'Opportunity' $ResourceType
 * @property 'Running'|'Stopped' $Status
 */
class GetResourceSnapshotJobResponse extends Response
{
}
