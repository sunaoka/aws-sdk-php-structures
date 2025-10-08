<?php

namespace Sunaoka\Aws\Structures\Kms\Decrypt;

trait DecryptTrait
{
    /**
     * @param DecryptRequest $args
     * @return DecryptResponse
     */
    public function decrypt(DecryptRequest $args)
    {
        $result = parent::decrypt($args->toArray());
        return new DecryptResponse($result->toArray());
    }
}
