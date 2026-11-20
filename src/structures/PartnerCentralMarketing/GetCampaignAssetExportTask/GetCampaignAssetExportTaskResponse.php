<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignAssetExportTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DownloadUrl
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property Shapes\CampaignAssetExportFailureReason|null $FailureReason
 */
class GetCampaignAssetExportTaskResponse extends Response
{
}
