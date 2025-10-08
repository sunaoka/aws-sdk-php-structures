<?php

namespace Sunaoka\Aws\Structures\MQ\Promote;

trait PromoteTrait
{
    /**
     * @param PromoteRequest $args
     * @return PromoteResponse
     */
    public function promote(PromoteRequest $args)
    {
        $result = parent::promote($args->toArray());
        return new PromoteResponse($result->toArray());
    }
}
