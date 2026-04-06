<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetCampaignStateBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FailedCampaignStateResponse>|null $failedRequests
 * @property list<Shapes\SuccessfulCampaignStateResponse>|null $successfulRequests
 */
class GetCampaignStateBatchResponse extends Response
{
}
