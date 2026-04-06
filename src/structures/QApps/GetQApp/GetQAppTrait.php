<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp;

trait GetQAppTrait
{
    /**
     * @param GetQAppRequest $args
     * @return GetQAppResponse
     */
    public function getQApp(GetQAppRequest $args)
    {
        $result = parent::getQApp($args->toArray());
        return new GetQAppResponse($result->toArray());
    }
}
