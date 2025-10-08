<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeletePublicKey;

trait DeletePublicKeyTrait
{
    /**
     * @param DeletePublicKeyRequest $args
     * @return void
     */
    public function deletePublicKey(DeletePublicKeyRequest $args)
    {
        parent::deletePublicKey($args->toArray());
    }
}
