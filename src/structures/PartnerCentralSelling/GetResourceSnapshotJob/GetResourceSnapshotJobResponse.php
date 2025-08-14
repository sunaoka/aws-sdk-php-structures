<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshotJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $EngagementId
 * @property 'Opportunity'|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $ResourceArn
 * @property string|null $ResourceSnapshotTemplateName
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'Running'|'Stopped'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulExecutionDate
 * @property string|null $LastFailure
 */
class GetResourceSnapshotJobResponse extends Response
{
}
