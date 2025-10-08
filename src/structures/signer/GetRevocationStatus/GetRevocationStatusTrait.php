<?php

namespace Sunaoka\Aws\Structures\signer\GetRevocationStatus;

trait GetRevocationStatusTrait
{
    /**
     * @param GetRevocationStatusRequest $args
     * @return GetRevocationStatusResponse
     */
    public function getRevocationStatus(GetRevocationStatusRequest $args)
    {
        $result = parent::getRevocationStatus($args->toArray());
        return new GetRevocationStatusResponse($result->toArray());
    }
}
