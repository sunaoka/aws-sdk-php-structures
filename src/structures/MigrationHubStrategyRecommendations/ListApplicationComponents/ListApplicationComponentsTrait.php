<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents;

trait ListApplicationComponentsTrait
{
    /**
     * @param ListApplicationComponentsRequest $args
     * @return ListApplicationComponentsResponse
     */
    public function listApplicationComponents(ListApplicationComponentsRequest $args)
    {
        $result = parent::listApplicationComponents($args->toArray());
        return new ListApplicationComponentsResponse($result->toArray());
    }
}
