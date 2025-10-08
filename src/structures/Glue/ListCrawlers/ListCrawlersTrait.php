<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawlers;

trait ListCrawlersTrait
{
    /**
     * @param ListCrawlersRequest $args
     * @return ListCrawlersResponse
     */
    public function listCrawlers(ListCrawlersRequest $args)
    {
        $result = parent::listCrawlers($args->toArray());
        return new ListCrawlersResponse($result->toArray());
    }
}
