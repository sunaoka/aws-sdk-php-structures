<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateQuotaShare;

trait UpdateQuotaShareTrait
{
    /**
     * @param UpdateQuotaShareRequest $args
     * @return UpdateQuotaShareResponse
     */
    public function updateQuotaShare(UpdateQuotaShareRequest $args)
    {
        $result = parent::updateQuotaShare($args->toArray());
        return new UpdateQuotaShareResponse($result->toArray());
    }
}
