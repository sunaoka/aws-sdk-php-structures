<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHub;

trait CreateHubTrait
{
    /**
     * @param CreateHubRequest $args
     * @return CreateHubResponse
     */
    public function createHub(CreateHubRequest $args)
    {
        $result = parent::createHub($args->toArray());
        return new CreateHubResponse($result->toArray());
    }
}
