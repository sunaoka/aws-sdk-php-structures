<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubs;

trait ListHubsTrait
{
    /**
     * @param ListHubsRequest $args
     * @return ListHubsResponse
     */
    public function listHubs(ListHubsRequest $args)
    {
        $result = parent::listHubs($args->toArray());
        return new ListHubsResponse($result->toArray());
    }
}
