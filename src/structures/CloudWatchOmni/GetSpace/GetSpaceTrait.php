<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetSpace;

trait GetSpaceTrait
{
    /**
     * @param GetSpaceRequest $args
     * @return GetSpaceResponse
     */
    public function getSpace(GetSpaceRequest $args)
    {
        $result = parent::getSpace($args->toArray());
        return new GetSpaceResponse($result->toArray());
    }
}
