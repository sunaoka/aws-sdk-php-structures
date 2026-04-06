<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListSdiSources;

trait ListSdiSourcesTrait
{
    /**
     * @param ListSdiSourcesRequest $args
     * @return ListSdiSourcesResponse
     */
    public function listSdiSources(ListSdiSourcesRequest $args)
    {
        $result = parent::listSdiSources($args->toArray());
        return new ListSdiSourcesResponse($result->toArray());
    }
}
