<?php

namespace Sunaoka\Aws\Structures\Kms\Verify;

trait VerifyTrait
{
    /**
     * @param VerifyRequest $args
     * @return VerifyResponse
     */
    public function verify(VerifyRequest $args)
    {
        $result = parent::verify($args->toArray());
        return new VerifyResponse($result->toArray());
    }
}
