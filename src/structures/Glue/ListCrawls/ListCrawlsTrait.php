<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawls;

trait ListCrawlsTrait
{
    /**
     * @param ListCrawlsRequest $args
     * @return ListCrawlsResponse
     */
    public function listCrawls(ListCrawlsRequest $args)
    {
        $result = parent::listCrawls($args->toArray());
        return new ListCrawlsResponse($result->toArray());
    }
}
