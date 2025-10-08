<?php

namespace Sunaoka\Aws\Structures\FMS\GetResourceSet;

trait GetResourceSetTrait
{
    /**
     * @param GetResourceSetRequest $args
     * @return GetResourceSetResponse
     */
    public function getResourceSet(GetResourceSetRequest $args)
    {
        $result = parent::getResourceSet($args->toArray());
        return new GetResourceSetResponse($result->toArray());
    }
}
