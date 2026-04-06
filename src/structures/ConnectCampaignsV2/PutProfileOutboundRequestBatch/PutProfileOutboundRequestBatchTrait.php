<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutProfileOutboundRequestBatch;

trait PutProfileOutboundRequestBatchTrait
{
    /**
     * @param PutProfileOutboundRequestBatchRequest $args
     * @return PutProfileOutboundRequestBatchResponse
     */
    public function putProfileOutboundRequestBatch(PutProfileOutboundRequestBatchRequest $args)
    {
        $result = parent::putProfileOutboundRequestBatch($args->toArray());
        return new PutProfileOutboundRequestBatchResponse($result->toArray());
    }
}
