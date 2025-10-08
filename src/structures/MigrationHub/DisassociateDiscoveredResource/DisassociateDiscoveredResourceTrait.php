<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DisassociateDiscoveredResource;

trait DisassociateDiscoveredResourceTrait
{
    /**
     * @param DisassociateDiscoveredResourceRequest $args
     * @return DisassociateDiscoveredResourceResponse
     */
    public function disassociateDiscoveredResource(DisassociateDiscoveredResourceRequest $args)
    {
        $result = parent::disassociateDiscoveredResource($args->toArray());
        return new DisassociateDiscoveredResourceResponse($result->toArray());
    }
}
