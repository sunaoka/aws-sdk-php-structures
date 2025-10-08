<?php

namespace Sunaoka\Aws\Structures\Route53\GetChange;

trait GetChangeTrait
{
    /**
     * @param GetChangeRequest $args
     * @return GetChangeResponse
     */
    public function getChange(GetChangeRequest $args)
    {
        $result = parent::getChange($args->toArray());
        return new GetChangeResponse($result->toArray());
    }
}
