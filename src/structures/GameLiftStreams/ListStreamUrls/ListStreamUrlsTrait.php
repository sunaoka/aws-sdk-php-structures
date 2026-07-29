<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamUrls;

trait ListStreamUrlsTrait
{
    /**
     * @param ListStreamUrlsRequest $args
     * @return ListStreamUrlsResponse
     */
    public function listStreamUrls(ListStreamUrlsRequest $args)
    {
        $result = parent::listStreamUrls($args->toArray());
        return new ListStreamUrlsResponse($result->toArray());
    }
}
