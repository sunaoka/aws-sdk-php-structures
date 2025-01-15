<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetCampaignStateBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SuccessfulCampaignStateResponse>|null $successfulRequests
 * @property list<Shapes\FailedCampaignStateResponse>|null $failedRequests
 */
class GetCampaignStateBatchResponse extends Response
{
}
