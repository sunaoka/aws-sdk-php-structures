<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAccountPool;

trait GetAccountPoolTrait
{
    /**
     * @param GetAccountPoolRequest $args
     * @return GetAccountPoolResponse
     */
    public function getAccountPool(GetAccountPoolRequest $args)
    {
        $result = parent::getAccountPool($args->toArray());
        return new GetAccountPoolResponse($result->toArray());
    }
}
