<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceEventWindow;

trait CreateInstanceEventWindowTrait
{
    /**
     * @param CreateInstanceEventWindowRequest $args
     * @return CreateInstanceEventWindowResponse
     */
    public function createInstanceEventWindow(CreateInstanceEventWindowRequest $args)
    {
        $result = parent::createInstanceEventWindow($args->toArray());
        return new CreateInstanceEventWindowResponse($result->toArray());
    }
}
