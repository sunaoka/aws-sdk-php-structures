<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateDiscoveredResource;

trait AssociateDiscoveredResourceTrait
{
    /**
     * @param AssociateDiscoveredResourceRequest $args
     * @return AssociateDiscoveredResourceResponse
     */
    public function associateDiscoveredResource(AssociateDiscoveredResourceRequest $args)
    {
        $result = parent::associateDiscoveredResource($args->toArray());
        return new AssociateDiscoveredResourceResponse($result->toArray());
    }
}
