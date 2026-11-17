<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateContextStore;

trait DisassociateContextStoreTrait
{
    /**
     * @param DisassociateContextStoreRequest $args
     * @return DisassociateContextStoreResponse
     */
    public function disassociateContextStore(DisassociateContextStoreRequest $args)
    {
        $result = parent::disassociateContextStore($args->toArray());
        return new DisassociateContextStoreResponse($result->toArray());
    }
}
