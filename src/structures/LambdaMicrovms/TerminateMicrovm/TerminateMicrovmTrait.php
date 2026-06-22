<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\TerminateMicrovm;

trait TerminateMicrovmTrait
{
    /**
     * @param TerminateMicrovmRequest $args
     * @return TerminateMicrovmResponse
     */
    public function terminateMicrovm(TerminateMicrovmRequest $args)
    {
        $result = parent::terminateMicrovm($args->toArray());
        return new TerminateMicrovmResponse($result->toArray());
    }
}
