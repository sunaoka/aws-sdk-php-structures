<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateInstanceEventWindow;

trait AssociateInstanceEventWindowTrait
{
    /**
     * @param AssociateInstanceEventWindowRequest $args
     * @return AssociateInstanceEventWindowResponse
     */
    public function associateInstanceEventWindow(AssociateInstanceEventWindowRequest $args)
    {
        $result = parent::associateInstanceEventWindow($args->toArray());
        return new AssociateInstanceEventWindowResponse($result->toArray());
    }
}
