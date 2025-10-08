<?php

namespace Sunaoka\Aws\Structures\Amplify\GetApp;

trait GetAppTrait
{
    /**
     * @param GetAppRequest $args
     * @return GetAppResponse
     */
    public function getApp(GetAppRequest $args)
    {
        $result = parent::getApp($args->toArray());
        return new GetAppResponse($result->toArray());
    }
}
