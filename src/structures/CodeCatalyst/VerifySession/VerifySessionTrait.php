<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\VerifySession;

trait VerifySessionTrait
{
    /**
     * @return VerifySessionResponse
     */
    public function verifySession()
    {
        $result = parent::verifySession();
        return new VerifySessionResponse($result->toArray());
    }
}
