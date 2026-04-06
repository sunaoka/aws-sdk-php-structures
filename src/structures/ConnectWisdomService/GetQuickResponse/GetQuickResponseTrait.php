<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetQuickResponse;

trait GetQuickResponseTrait
{
    /**
     * @param GetQuickResponseRequest $args
     * @return GetQuickResponseResponse
     */
    public function getQuickResponse(GetQuickResponseRequest $args)
    {
        $result = parent::getQuickResponse($args->toArray());
        return new GetQuickResponseResponse($result->toArray());
    }
}
