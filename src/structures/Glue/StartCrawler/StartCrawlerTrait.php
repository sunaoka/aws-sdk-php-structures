<?php

namespace Sunaoka\Aws\Structures\Glue\StartCrawler;

trait StartCrawlerTrait
{
    /**
     * @param StartCrawlerRequest $args
     * @return StartCrawlerResponse
     */
    public function startCrawler(StartCrawlerRequest $args)
    {
        $result = parent::startCrawler($args->toArray());
        return new StartCrawlerResponse($result->toArray());
    }
}
