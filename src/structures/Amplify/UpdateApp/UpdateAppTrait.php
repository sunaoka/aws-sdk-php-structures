<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateApp;

trait UpdateAppTrait
{
    /**
     * @param UpdateAppRequest $args
     * @return UpdateAppResponse
     */
    public function updateApp(UpdateAppRequest $args)
    {
        $result = parent::updateApp($args->toArray());
        return new UpdateAppResponse($result->toArray());
    }
}
