<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper;

trait UpdateScraperTrait
{
    /**
     * @param UpdateScraperRequest $args
     * @return UpdateScraperResponse
     */
    public function updateScraper(UpdateScraperRequest $args)
    {
        $result = parent::updateScraper($args->toArray());
        return new UpdateScraperResponse($result->toArray());
    }
}
