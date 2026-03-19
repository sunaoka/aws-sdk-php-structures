<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteQuotaShare;

trait DeleteQuotaShareTrait
{
    /**
     * @param DeleteQuotaShareRequest $args
     * @return DeleteQuotaShareResponse
     */
    public function deleteQuotaShare(DeleteQuotaShareRequest $args)
    {
        $result = parent::deleteQuotaShare($args->toArray());
        return new DeleteQuotaShareResponse($result->toArray());
    }
}
