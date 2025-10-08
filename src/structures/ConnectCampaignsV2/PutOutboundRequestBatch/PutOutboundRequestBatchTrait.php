<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch;

trait PutOutboundRequestBatchTrait
{
    /**
     * @param PutOutboundRequestBatchRequest $args
     * @return PutOutboundRequestBatchResponse
     */
    public function putOutboundRequestBatch(PutOutboundRequestBatchRequest $args)
    {
        $result = parent::putOutboundRequestBatch($args->toArray());
        return new PutOutboundRequestBatchResponse($result->toArray());
    }
}
