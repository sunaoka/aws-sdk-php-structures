<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateIPSet;

trait UpdateIPSetTrait
{
    /**
     * @param UpdateIPSetRequest $args
     * @return UpdateIPSetResponse
     */
    public function updateIPSet(UpdateIPSetRequest $args)
    {
        $result = parent::updateIPSet($args->toArray());
        return new UpdateIPSetResponse($result->toArray());
    }
}
