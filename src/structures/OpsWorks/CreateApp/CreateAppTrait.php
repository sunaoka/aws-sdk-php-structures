<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateApp;

trait CreateAppTrait
{
    /**
     * @param CreateAppRequest $args
     * @return CreateAppResponse
     */
    public function createApp(CreateAppRequest $args)
    {
        $result = parent::createApp($args->toArray());
        return new CreateAppResponse($result->toArray());
    }
}
