<?php

namespace Sunaoka\Aws\Structures\Batch\CreateQuotaShare;

trait CreateQuotaShareTrait
{
    /**
     * @param CreateQuotaShareRequest $args
     * @return CreateQuotaShareResponse
     */
    public function createQuotaShare(CreateQuotaShareRequest $args)
    {
        $result = parent::createQuotaShare($args->toArray());
        return new CreateQuotaShareResponse($result->toArray());
    }
}
