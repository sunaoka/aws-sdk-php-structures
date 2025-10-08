<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateInstanceEventWindow;

trait DisassociateInstanceEventWindowTrait
{
    /**
     * @param DisassociateInstanceEventWindowRequest $args
     * @return DisassociateInstanceEventWindowResponse
     */
    public function disassociateInstanceEventWindow(DisassociateInstanceEventWindowRequest $args)
    {
        $result = parent::disassociateInstanceEventWindow($args->toArray());
        return new DisassociateInstanceEventWindowResponse($result->toArray());
    }
}
