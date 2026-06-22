<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ResumeMicrovm;

trait ResumeMicrovmTrait
{
    /**
     * @param ResumeMicrovmRequest $args
     * @return ResumeMicrovmResponse
     */
    public function resumeMicrovm(ResumeMicrovmRequest $args)
    {
        $result = parent::resumeMicrovm($args->toArray());
        return new ResumeMicrovmResponse($result->toArray());
    }
}
