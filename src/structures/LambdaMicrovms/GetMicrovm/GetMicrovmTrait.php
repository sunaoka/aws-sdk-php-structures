<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovm;

trait GetMicrovmTrait
{
    /**
     * @param GetMicrovmRequest $args
     * @return GetMicrovmResponse
     */
    public function getMicrovm(GetMicrovmRequest $args)
    {
        $result = parent::getMicrovm($args->toArray());
        return new GetMicrovmResponse($result->toArray());
    }
}
