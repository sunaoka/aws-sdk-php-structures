<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateTrustedEntitySet;

trait UpdateTrustedEntitySetTrait
{
    /**
     * @param UpdateTrustedEntitySetRequest $args
     * @return UpdateTrustedEntitySetResponse
     */
    public function updateTrustedEntitySet(UpdateTrustedEntitySetRequest $args)
    {
        $result = parent::updateTrustedEntitySet($args->toArray());
        return new UpdateTrustedEntitySetResponse($result->toArray());
    }
}
