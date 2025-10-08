<?php

namespace Sunaoka\Aws\Structures\Omics\AcceptShare;

trait AcceptShareTrait
{
    /**
     * @param AcceptShareRequest $args
     * @return AcceptShareResponse
     */
    public function acceptShare(AcceptShareRequest $args)
    {
        $result = parent::acceptShare($args->toArray());
        return new AcceptShareResponse($result->toArray());
    }
}
