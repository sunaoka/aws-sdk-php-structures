<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociateTagOptionFromResource;

trait DisassociateTagOptionFromResourceTrait
{
    /**
     * @param DisassociateTagOptionFromResourceRequest $args
     * @return DisassociateTagOptionFromResourceResponse
     */
    public function disassociateTagOptionFromResource(DisassociateTagOptionFromResourceRequest $args)
    {
        $result = parent::disassociateTagOptionFromResource($args->toArray());
        return new DisassociateTagOptionFromResourceResponse($result->toArray());
    }
}
