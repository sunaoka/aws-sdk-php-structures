<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociateTagOptionWithResource;

trait AssociateTagOptionWithResourceTrait
{
    /**
     * @param AssociateTagOptionWithResourceRequest $args
     * @return AssociateTagOptionWithResourceResponse
     */
    public function associateTagOptionWithResource(AssociateTagOptionWithResourceRequest $args)
    {
        $result = parent::associateTagOptionWithResource($args->toArray());
        return new AssociateTagOptionWithResourceResponse($result->toArray());
    }
}
