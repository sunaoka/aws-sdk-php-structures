<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListLiveSources;

trait ListLiveSourcesTrait
{
    /**
     * @param ListLiveSourcesRequest $args
     * @return ListLiveSourcesResponse
     */
    public function listLiveSources(ListLiveSourcesRequest $args)
    {
        $result = parent::listLiveSources($args->toArray());
        return new ListLiveSourcesResponse($result->toArray());
    }
}
