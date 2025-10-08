<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSet;

trait GetReadSetTrait
{
    /**
     * @param GetReadSetRequest $args
     * @return GetReadSetResponse
     */
    public function getReadSet(GetReadSetRequest $args)
    {
        $result = parent::getReadSet($args->toArray());
        return new GetReadSetResponse($result->toArray());
    }
}
