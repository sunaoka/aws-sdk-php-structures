<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetAccessor;

trait GetAccessorTrait
{
    /**
     * @param GetAccessorRequest $args
     * @return GetAccessorResponse
     */
    public function getAccessor(GetAccessorRequest $args)
    {
        $result = parent::getAccessor($args->toArray());
        return new GetAccessorResponse($result->toArray());
    }
}
