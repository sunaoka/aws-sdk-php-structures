<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateStack;

trait CreateStackTrait
{
    /**
     * @param CreateStackRequest $args
     * @return CreateStackResponse
     */
    public function createStack(CreateStackRequest $args)
    {
        $result = parent::createStack($args->toArray());
        return new CreateStackResponse($result->toArray());
    }
}
