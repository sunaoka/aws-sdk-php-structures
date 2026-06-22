<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\SuspendMicrovm;

trait SuspendMicrovmTrait
{
    /**
     * @param SuspendMicrovmRequest $args
     * @return SuspendMicrovmResponse
     */
    public function suspendMicrovm(SuspendMicrovmRequest $args)
    {
        $result = parent::suspendMicrovm($args->toArray());
        return new SuspendMicrovmResponse($result->toArray());
    }
}
