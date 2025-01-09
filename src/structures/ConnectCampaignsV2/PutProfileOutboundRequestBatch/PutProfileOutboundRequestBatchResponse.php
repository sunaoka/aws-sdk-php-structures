<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SuccessfulProfileOutboundRequest> $successfulRequests
 * @property list<Shapes\FailedProfileOutboundRequest> $failedRequests
 */
class PutProfileOutboundRequestBatchResponse extends Response
{
}
