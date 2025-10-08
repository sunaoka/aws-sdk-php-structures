<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutWarmPool;

trait PutWarmPoolTrait
{
    /**
     * @param PutWarmPoolRequest $args
     * @return PutWarmPoolResponse
     */
    public function putWarmPool(PutWarmPoolRequest $args)
    {
        $result = parent::putWarmPool($args->toArray());
        return new PutWarmPoolResponse($result->toArray());
    }
}
