<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackSet;

trait CreateStackSetTrait
{
    /**
     * @param CreateStackSetRequest $args
     * @return CreateStackSetResponse
     */
    public function createStackSet(CreateStackSetRequest $args)
    {
        $result = parent::createStackSet($args->toArray());
        return new CreateStackSetResponse($result->toArray());
    }
}
