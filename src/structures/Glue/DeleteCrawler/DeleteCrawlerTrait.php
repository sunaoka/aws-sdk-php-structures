<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteCrawler;

trait DeleteCrawlerTrait
{
    /**
     * @param DeleteCrawlerRequest $args
     * @return DeleteCrawlerResponse
     */
    public function deleteCrawler(DeleteCrawlerRequest $args)
    {
        $result = parent::deleteCrawler($args->toArray());
        return new DeleteCrawlerResponse($result->toArray());
    }
}
