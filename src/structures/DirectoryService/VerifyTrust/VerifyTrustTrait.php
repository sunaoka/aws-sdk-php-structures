<?php

namespace Sunaoka\Aws\Structures\DirectoryService\VerifyTrust;

trait VerifyTrustTrait
{
    /**
     * @param VerifyTrustRequest $args
     * @return VerifyTrustResponse
     */
    public function verifyTrust(VerifyTrustRequest $args)
    {
        $result = parent::verifyTrust($args->toArray());
        return new VerifyTrustResponse($result->toArray());
    }
}
