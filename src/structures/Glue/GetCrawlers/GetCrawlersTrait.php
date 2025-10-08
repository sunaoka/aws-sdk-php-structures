<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers;

trait GetCrawlersTrait
{
    /**
     * @param GetCrawlersRequest $args
     * @return GetCrawlersResponse
     */
    public function getCrawlers(GetCrawlersRequest $args)
    {
        $result = parent::getCrawlers($args->toArray());
        return new GetCrawlersResponse($result->toArray());
    }
}
