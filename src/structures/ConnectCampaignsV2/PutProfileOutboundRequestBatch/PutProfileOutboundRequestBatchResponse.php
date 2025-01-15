<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SuccessfulProfileOutboundRequest>|null $successfulRequests
 * @property list<Shapes\FailedProfileOutboundRequest>|null $failedRequests
 */
class PutProfileOutboundRequestBatchResponse extends Response
{
}
