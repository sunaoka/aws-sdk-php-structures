<?php

namespace Sunaoka\Aws\Structures\Proton\GetComponent;

trait GetComponentTrait
{
    /**
     * @param GetComponentRequest $args
     * @return GetComponentResponse
     */
    public function getComponent(GetComponentRequest $args)
    {
        $result = parent::getComponent($args->toArray());
        return new GetComponentResponse($result->toArray());
    }
}
