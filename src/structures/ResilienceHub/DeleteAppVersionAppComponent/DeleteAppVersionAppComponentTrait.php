<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppVersionAppComponent;

trait DeleteAppVersionAppComponentTrait
{
    /**
     * @param DeleteAppVersionAppComponentRequest $args
     * @return DeleteAppVersionAppComponentResponse
     */
    public function deleteAppVersionAppComponent(DeleteAppVersionAppComponentRequest $args)
    {
        $result = parent::deleteAppVersionAppComponent($args->toArray());
        return new DeleteAppVersionAppComponentResponse($result->toArray());
    }
}
