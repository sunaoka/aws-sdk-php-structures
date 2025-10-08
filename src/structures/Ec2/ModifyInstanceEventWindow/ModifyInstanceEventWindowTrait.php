<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventWindow;

trait ModifyInstanceEventWindowTrait
{
    /**
     * @param ModifyInstanceEventWindowRequest $args
     * @return ModifyInstanceEventWindowResponse
     */
    public function modifyInstanceEventWindow(ModifyInstanceEventWindowRequest $args)
    {
        $result = parent::modifyInstanceEventWindow($args->toArray());
        return new ModifyInstanceEventWindowResponse($result->toArray());
    }
}
