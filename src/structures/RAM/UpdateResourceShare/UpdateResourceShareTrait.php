<?php

namespace Sunaoka\Aws\Structures\RAM\UpdateResourceShare;

trait UpdateResourceShareTrait
{
    /**
     * @param UpdateResourceShareRequest $args
     * @return UpdateResourceShareResponse
     */
    public function updateResourceShare(UpdateResourceShareRequest $args)
    {
        $result = parent::updateResourceShare($args->toArray());
        return new UpdateResourceShareResponse($result->toArray());
    }
}
