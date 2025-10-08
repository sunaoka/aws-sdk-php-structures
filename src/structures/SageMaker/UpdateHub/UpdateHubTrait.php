<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateHub;

trait UpdateHubTrait
{
    /**
     * @param UpdateHubRequest $args
     * @return UpdateHubResponse
     */
    public function updateHub(UpdateHubRequest $args)
    {
        $result = parent::updateHub($args->toArray());
        return new UpdateHubResponse($result->toArray());
    }
}
