<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\RunMicrovm;

trait RunMicrovmTrait
{
    /**
     * @param RunMicrovmRequest $args
     * @return RunMicrovmResponse
     */
    public function runMicrovm(RunMicrovmRequest $args)
    {
        $result = parent::runMicrovm($args->toArray());
        return new RunMicrovmResponse($result->toArray());
    }
}
