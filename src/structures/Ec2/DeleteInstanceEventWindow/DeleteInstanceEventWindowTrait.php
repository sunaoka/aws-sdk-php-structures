<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInstanceEventWindow;

trait DeleteInstanceEventWindowTrait
{
    /**
     * @param DeleteInstanceEventWindowRequest $args
     * @return DeleteInstanceEventWindowResponse
     */
    public function deleteInstanceEventWindow(DeleteInstanceEventWindowRequest $args)
    {
        $result = parent::deleteInstanceEventWindow($args->toArray());
        return new DeleteInstanceEventWindowResponse($result->toArray());
    }
}
