<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StartApp;

trait StartAppTrait
{
    /**
     * @param StartAppRequest $args
     * @return StartAppResponse
     */
    public function startApp(StartAppRequest $args)
    {
        $result = parent::startApp($args->toArray());
        return new StartAppResponse($result->toArray());
    }
}
