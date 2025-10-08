<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateActivity;

trait CreateActivityTrait
{
    /**
     * @param CreateActivityRequest $args
     * @return CreateActivityResponse
     */
    public function createActivity(CreateActivityRequest $args)
    {
        $result = parent::createActivity($args->toArray());
        return new CreateActivityResponse($result->toArray());
    }
}
