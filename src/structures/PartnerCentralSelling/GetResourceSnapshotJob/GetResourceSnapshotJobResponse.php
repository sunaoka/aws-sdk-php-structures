<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshotJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string $Catalog
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $EngagementId
 * @property string|null $Id
 * @property string|null $LastFailure
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulExecutionDate
 * @property string|null $ResourceArn
 * @property string|null $ResourceId
 * @property string|null $ResourceSnapshotTemplateName
 * @property 'Opportunity'|null $ResourceType
 * @property 'Running'|'Stopped'|null $Status
 */
class GetResourceSnapshotJobResponse extends Response
{
}
