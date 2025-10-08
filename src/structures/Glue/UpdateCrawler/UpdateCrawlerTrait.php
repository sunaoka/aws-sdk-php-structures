<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCrawler;

trait UpdateCrawlerTrait
{
    /**
     * @param UpdateCrawlerRequest $args
     * @return UpdateCrawlerResponse
     */
    public function updateCrawler(UpdateCrawlerRequest $args)
    {
        $result = parent::updateCrawler($args->toArray());
        return new UpdateCrawlerResponse($result->toArray());
    }
}
