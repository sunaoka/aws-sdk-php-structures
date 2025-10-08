<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\UpdateQuickResponse;

trait UpdateQuickResponseTrait
{
    /**
     * @param UpdateQuickResponseRequest $args
     * @return UpdateQuickResponseResponse
     */
    public function updateQuickResponse(UpdateQuickResponseRequest $args)
    {
        $result = parent::updateQuickResponse($args->toArray());
        return new UpdateQuickResponseResponse($result->toArray());
    }
}
