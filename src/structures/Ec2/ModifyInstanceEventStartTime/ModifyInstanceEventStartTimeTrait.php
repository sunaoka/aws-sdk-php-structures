<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventStartTime;

trait ModifyInstanceEventStartTimeTrait
{
    /**
     * @param ModifyInstanceEventStartTimeRequest $args
     * @return ModifyInstanceEventStartTimeResponse
     */
    public function modifyInstanceEventStartTime(ModifyInstanceEventStartTimeRequest $args)
    {
        $result = parent::modifyInstanceEventStartTime($args->toArray());
        return new ModifyInstanceEventStartTimeResponse($result->toArray());
    }
}
