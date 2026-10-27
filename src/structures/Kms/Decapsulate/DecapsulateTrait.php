<?php

namespace Sunaoka\Aws\Structures\Kms\Decapsulate;

trait DecapsulateTrait
{
    /**
     * @param DecapsulateRequest $args
     * @return DecapsulateResponse
     */
    public function decapsulate(DecapsulateRequest $args)
    {
        $result = parent::decapsulate($args->toArray());
        return new DecapsulateResponse($result->toArray());
    }
}
