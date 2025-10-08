<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetSoftwareSet;

trait GetSoftwareSetTrait
{
    /**
     * @param GetSoftwareSetRequest $args
     * @return GetSoftwareSetResponse
     */
    public function getSoftwareSet(GetSoftwareSetRequest $args)
    {
        $result = parent::getSoftwareSet($args->toArray());
        return new GetSoftwareSetResponse($result->toArray());
    }
}
