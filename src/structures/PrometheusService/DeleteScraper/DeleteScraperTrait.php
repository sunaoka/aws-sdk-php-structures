<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteScraper;

trait DeleteScraperTrait
{
    /**
     * @param DeleteScraperRequest $args
     * @return DeleteScraperResponse
     */
    public function deleteScraper(DeleteScraperRequest $args)
    {
        $result = parent::deleteScraper($args->toArray());
        return new DeleteScraperResponse($result->toArray());
    }
}
