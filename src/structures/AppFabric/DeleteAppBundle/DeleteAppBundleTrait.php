<?php

namespace Sunaoka\Aws\Structures\AppFabric\DeleteAppBundle;

trait DeleteAppBundleTrait
{
    /**
     * @param DeleteAppBundleRequest $args
     * @return DeleteAppBundleResponse
     */
    public function deleteAppBundle(DeleteAppBundleRequest $args)
    {
        $result = parent::deleteAppBundle($args->toArray());
        return new DeleteAppBundleResponse($result->toArray());
    }
}
