<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCrawler;

trait CreateCrawlerTrait
{
    /**
     * @param CreateCrawlerRequest $args
     * @return CreateCrawlerResponse
     */
    public function createCrawler(CreateCrawlerRequest $args)
    {
        $result = parent::createCrawler($args->toArray());
        return new CreateCrawlerResponse($result->toArray());
    }
}
