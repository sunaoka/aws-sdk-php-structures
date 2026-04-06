<?php

namespace Sunaoka\Aws\Structures\NovaAct\InvokeActStep;

trait InvokeActStepTrait
{
    /**
     * @param InvokeActStepRequest $args
     * @return InvokeActStepResponse
     */
    public function invokeActStep(InvokeActStepRequest $args)
    {
        $result = parent::invokeActStep($args->toArray());
        return new InvokeActStepResponse($result->toArray());
    }
}
