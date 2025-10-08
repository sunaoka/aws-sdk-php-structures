<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteApp;

trait DeleteAppTrait
{
    /**
     * @param DeleteAppRequest $args
     * @return DeleteAppResponse
     */
    public function deleteApp(DeleteAppRequest $args)
    {
        $result = parent::deleteApp($args->toArray());
        return new DeleteAppResponse($result->toArray());
    }
}
