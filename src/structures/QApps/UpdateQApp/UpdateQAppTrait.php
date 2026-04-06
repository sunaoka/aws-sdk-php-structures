<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQApp;

trait UpdateQAppTrait
{
    /**
     * @param UpdateQAppRequest $args
     * @return UpdateQAppResponse
     */
    public function updateQApp(UpdateQAppRequest $args)
    {
        $result = parent::updateQApp($args->toArray());
        return new UpdateQAppResponse($result->toArray());
    }
}
