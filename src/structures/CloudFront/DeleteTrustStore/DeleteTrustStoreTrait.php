<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteTrustStore;

trait DeleteTrustStoreTrait
{
    /**
     * @param DeleteTrustStoreRequest $args
     * @return void
     */
    public function deleteTrustStore(DeleteTrustStoreRequest $args)
    {
        parent::deleteTrustStore($args->toArray());
    }
}
