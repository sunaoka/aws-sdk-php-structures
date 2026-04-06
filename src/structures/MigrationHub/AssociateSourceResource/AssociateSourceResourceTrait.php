<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateSourceResource;

trait AssociateSourceResourceTrait
{
    /**
     * @param AssociateSourceResourceRequest $args
     * @return AssociateSourceResourceResponse
     */
    public function associateSourceResource(AssociateSourceResourceRequest $args)
    {
        $result = parent::associateSourceResource($args->toArray());
        return new AssociateSourceResourceResponse($result->toArray());
    }
}
