<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch;

trait PutDialRequestBatchTrait
{
    /**
     * @param PutDialRequestBatchRequest $args
     * @return PutDialRequestBatchResponse
     */
    public function putDialRequestBatch(PutDialRequestBatchRequest $args)
    {
        $result = parent::putDialRequestBatch($args->toArray());
        return new PutDialRequestBatchResponse($result->toArray());
    }
}
