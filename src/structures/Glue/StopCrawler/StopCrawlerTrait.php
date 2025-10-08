<?php

namespace Sunaoka\Aws\Structures\Glue\StopCrawler;

trait StopCrawlerTrait
{
    /**
     * @param StopCrawlerRequest $args
     * @return StopCrawlerResponse
     */
    public function stopCrawler(StopCrawlerRequest $args)
    {
        $result = parent::stopCrawler($args->toArray());
        return new StopCrawlerResponse($result->toArray());
    }
}
