<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitTaskStateChange;

trait SubmitTaskStateChangeTrait
{
    /**
     * @param SubmitTaskStateChangeRequest $args
     * @return SubmitTaskStateChangeResponse
     */
    public function submitTaskStateChange(SubmitTaskStateChangeRequest $args)
    {
        $result = parent::submitTaskStateChange($args->toArray());
        return new SubmitTaskStateChangeResponse($result->toArray());
    }
}
