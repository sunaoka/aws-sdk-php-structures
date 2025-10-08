<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateTrustStore;

trait DisassociateTrustStoreTrait
{
    /**
     * @param DisassociateTrustStoreRequest $args
     * @return DisassociateTrustStoreResponse
     */
    public function disassociateTrustStore(DisassociateTrustStoreRequest $args)
    {
        $result = parent::disassociateTrustStore($args->toArray());
        return new DisassociateTrustStoreResponse($result->toArray());
    }
}
