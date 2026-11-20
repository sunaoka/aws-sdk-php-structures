<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAssetActivationTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CampaignId
 * @property string $TaskId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'PARTIAL_FAILURE'|'FAILED' $TaskStatus
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property list<Shapes\CampaignAssetActivationOutcome> $Assets
 */
class GetCampaignAssetActivationTaskResponse extends Response
{
}
