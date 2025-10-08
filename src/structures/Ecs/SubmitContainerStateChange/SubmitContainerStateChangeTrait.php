<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitContainerStateChange;

trait SubmitContainerStateChangeTrait
{
    /**
     * @param SubmitContainerStateChangeRequest $args
     * @return SubmitContainerStateChangeResponse
     */
    public function submitContainerStateChange(SubmitContainerStateChangeRequest $args)
    {
        $result = parent::submitContainerStateChange($args->toArray());
        return new SubmitContainerStateChangeResponse($result->toArray());
    }
}
