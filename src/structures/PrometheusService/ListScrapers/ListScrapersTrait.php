<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListScrapers;

trait ListScrapersTrait
{
    /**
     * @param ListScrapersRequest $args
     * @return ListScrapersResponse
     */
    public function listScrapers(ListScrapersRequest $args)
    {
        $result = parent::listScrapers($args->toArray());
        return new ListScrapersResponse($result->toArray());
    }
}
