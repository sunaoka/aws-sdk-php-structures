<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StopApp;

trait StopAppTrait
{
    /**
     * @param StopAppRequest $args
     * @return StopAppResponse
     */
    public function stopApp(StopAppRequest $args)
    {
        $result = parent::stopApp($args->toArray());
        return new StopAppResponse($result->toArray());
    }
}
