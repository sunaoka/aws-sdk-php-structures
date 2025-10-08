<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListVodSources;

trait ListVodSourcesTrait
{
    /**
     * @param ListVodSourcesRequest $args
     * @return ListVodSourcesResponse
     */
    public function listVodSources(ListVodSourcesRequest $args)
    {
        $result = parent::listVodSources($args->toArray());
        return new ListVodSourcesResponse($result->toArray());
    }
}
