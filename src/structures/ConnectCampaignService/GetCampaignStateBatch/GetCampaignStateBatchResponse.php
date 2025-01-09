<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetCampaignStateBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SuccessfulCampaignStateResponse> $successfulRequests
 * @property list<Shapes\FailedCampaignStateResponse> $failedRequests
 */
class GetCampaignStateBatchResponse extends Response
{
}
