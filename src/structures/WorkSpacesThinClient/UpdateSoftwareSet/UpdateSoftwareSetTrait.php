<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\UpdateSoftwareSet;

trait UpdateSoftwareSetTrait
{
    /**
     * @param UpdateSoftwareSetRequest $args
     * @return UpdateSoftwareSetResponse
     */
    public function updateSoftwareSet(UpdateSoftwareSetRequest $args)
    {
        $result = parent::updateSoftwareSet($args->toArray());
        return new UpdateSoftwareSetResponse($result->toArray());
    }
}
