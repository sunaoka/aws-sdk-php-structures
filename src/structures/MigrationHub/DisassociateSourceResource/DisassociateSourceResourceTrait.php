<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DisassociateSourceResource;

trait DisassociateSourceResourceTrait
{
    /**
     * @param DisassociateSourceResourceRequest $args
     * @return DisassociateSourceResourceResponse
     */
    public function disassociateSourceResource(DisassociateSourceResourceRequest $args)
    {
        $result = parent::disassociateSourceResource($args->toArray());
        return new DisassociateSourceResourceResponse($result->toArray());
    }
}
