<?php

namespace Sunaoka\Aws\Structures\RAM\DisassociateResourceShare;

trait DisassociateResourceShareTrait
{
    /**
     * @param DisassociateResourceShareRequest $args
     * @return DisassociateResourceShareResponse
     */
    public function disassociateResourceShare(DisassociateResourceShareRequest $args)
    {
        $result = parent::disassociateResourceShare($args->toArray());
        return new DisassociateResourceShareResponse($result->toArray());
    }
}
