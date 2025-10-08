<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteWarmPool;

trait DeleteWarmPoolTrait
{
    /**
     * @param DeleteWarmPoolRequest $args
     * @return DeleteWarmPoolResponse
     */
    public function deleteWarmPool(DeleteWarmPoolRequest $args)
    {
        $result = parent::deleteWarmPool($args->toArray());
        return new DeleteWarmPoolResponse($result->toArray());
    }
}
