<?php

namespace Sunaoka\Aws\Structures\Evs\GetDepotUrl;

trait GetDepotUrlTrait
{
    /**
     * @param GetDepotUrlRequest $args
     * @return GetDepotUrlResponse
     */
    public function getDepotUrl(GetDepotUrlRequest $args)
    {
        $result = parent::getDepotUrl($args->toArray());
        return new GetDepotUrlResponse($result->toArray());
    }
}
