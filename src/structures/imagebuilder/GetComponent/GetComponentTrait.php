<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetComponent;

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
