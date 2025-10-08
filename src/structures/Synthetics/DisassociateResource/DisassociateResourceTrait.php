<?php

namespace Sunaoka\Aws\Structures\Synthetics\DisassociateResource;

trait DisassociateResourceTrait
{
    /**
     * @param DisassociateResourceRequest $args
     * @return DisassociateResourceResponse
     */
    public function disassociateResource(DisassociateResourceRequest $args)
    {
        $result = parent::disassociateResource($args->toArray());
        return new DisassociateResourceResponse($result->toArray());
    }
}
