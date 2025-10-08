<?php

namespace Sunaoka\Aws\Structures\signer\SignPayload;

trait SignPayloadTrait
{
    /**
     * @param SignPayloadRequest $args
     * @return SignPayloadResponse
     */
    public function signPayload(SignPayloadRequest $args)
    {
        $result = parent::signPayload($args->toArray());
        return new SignPayloadResponse($result->toArray());
    }
}
