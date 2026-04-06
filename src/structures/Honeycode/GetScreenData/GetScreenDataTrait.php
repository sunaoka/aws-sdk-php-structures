<?php

namespace Sunaoka\Aws\Structures\Honeycode\GetScreenData;

trait GetScreenDataTrait
{
    /**
     * @param GetScreenDataRequest $args
     * @return GetScreenDataResponse
     */
    public function getScreenData(GetScreenDataRequest $args)
    {
        $result = parent::getScreenData($args->toArray());
        return new GetScreenDataResponse($result->toArray());
    }
}
