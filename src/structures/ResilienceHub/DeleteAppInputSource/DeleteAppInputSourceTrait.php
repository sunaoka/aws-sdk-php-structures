<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppInputSource;

trait DeleteAppInputSourceTrait
{
    /**
     * @param DeleteAppInputSourceRequest $args
     * @return DeleteAppInputSourceResponse
     */
    public function deleteAppInputSource(DeleteAppInputSourceRequest $args)
    {
        $result = parent::deleteAppInputSource($args->toArray());
        return new DeleteAppInputSourceResponse($result->toArray());
    }
}
