<?php

namespace Sunaoka\Aws\Structures\Kms\ReEncrypt;

trait ReEncryptTrait
{
    /**
     * @param ReEncryptRequest $args
     * @return ReEncryptResponse
     */
    public function reEncrypt(ReEncryptRequest $args)
    {
        $result = parent::reEncrypt($args->toArray());
        return new ReEncryptResponse($result->toArray());
    }
}
