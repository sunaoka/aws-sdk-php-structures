<?php

namespace Sunaoka\Aws\Structures\Omics\GetShare;

trait GetShareTrait
{
    /**
     * @param GetShareRequest $args
     * @return GetShareResponse
     */
    public function getShare(GetShareRequest $args)
    {
        $result = parent::getShare($args->toArray());
        return new GetShareResponse($result->toArray());
    }
}
