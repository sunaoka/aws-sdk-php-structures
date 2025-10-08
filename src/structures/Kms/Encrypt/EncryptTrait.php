<?php

namespace Sunaoka\Aws\Structures\Kms\Encrypt;

trait EncryptTrait
{
    /**
     * @param EncryptRequest $args
     * @return EncryptResponse
     */
    public function encrypt(EncryptRequest $args)
    {
        $result = parent::encrypt($args->toArray());
        return new EncryptResponse($result->toArray());
    }
}
