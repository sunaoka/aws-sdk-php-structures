<?php

namespace Sunaoka\Aws\Structures\SignerData\GetRevocationStatus;

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
