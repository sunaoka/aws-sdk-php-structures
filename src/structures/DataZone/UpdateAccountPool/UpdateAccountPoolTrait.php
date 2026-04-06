<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAccountPool;

trait UpdateAccountPoolTrait
{
    /**
     * @param UpdateAccountPoolRequest $args
     * @return UpdateAccountPoolResponse
     */
    public function updateAccountPool(UpdateAccountPoolRequest $args)
    {
        $result = parent::updateAccountPool($args->toArray());
        return new UpdateAccountPoolResponse($result->toArray());
    }
}
