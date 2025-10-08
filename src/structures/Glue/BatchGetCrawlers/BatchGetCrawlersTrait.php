<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCrawlers;

trait BatchGetCrawlersTrait
{
    /**
     * @param BatchGetCrawlersRequest $args
     * @return BatchGetCrawlersResponse
     */
    public function batchGetCrawlers(BatchGetCrawlersRequest $args)
    {
        $result = parent::batchGetCrawlers($args->toArray());
        return new BatchGetCrawlersResponse($result->toArray());
    }
}
