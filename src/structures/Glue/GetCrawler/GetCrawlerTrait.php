<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler;

trait GetCrawlerTrait
{
    /**
     * @param GetCrawlerRequest $args
     * @return GetCrawlerResponse
     */
    public function getCrawler(GetCrawlerRequest $args)
    {
        $result = parent::getCrawler($args->toArray());
        return new GetCrawlerResponse($result->toArray());
    }
}
