<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataAccessor;

trait GetDataAccessorTrait
{
    /**
     * @param GetDataAccessorRequest $args
     * @return GetDataAccessorResponse
     */
    public function getDataAccessor(GetDataAccessorRequest $args)
    {
        $result = parent::getDataAccessor($args->toArray());
        return new GetDataAccessorResponse($result->toArray());
    }
}
