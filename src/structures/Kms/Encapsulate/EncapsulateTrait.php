<?php

namespace Sunaoka\Aws\Structures\Kms\Encapsulate;

trait EncapsulateTrait
{
    /**
     * @param EncapsulateRequest $args
     * @return EncapsulateResponse
     */
    public function encapsulate(EncapsulateRequest $args)
    {
        $result = parent::encapsulate($args->toArray());
        return new EncapsulateResponse($result->toArray());
    }
}
