<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors;

trait ListCollectorsTrait
{
    /**
     * @param ListCollectorsRequest $args
     * @return ListCollectorsResponse
     */
    public function listCollectors(ListCollectorsRequest $args)
    {
        $result = parent::listCollectors($args->toArray());
        return new ListCollectorsResponse($result->toArray());
    }
}
