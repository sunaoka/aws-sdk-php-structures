<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper;

trait CreateScraperTrait
{
    /**
     * @param CreateScraperRequest $args
     * @return CreateScraperResponse
     */
    public function createScraper(CreateScraperRequest $args)
    {
        $result = parent::createScraper($args->toArray());
        return new CreateScraperResponse($result->toArray());
    }
}
