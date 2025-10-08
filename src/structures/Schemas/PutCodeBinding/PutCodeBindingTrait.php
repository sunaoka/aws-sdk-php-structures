<?php

namespace Sunaoka\Aws\Structures\Schemas\PutCodeBinding;

trait PutCodeBindingTrait
{
    /**
     * @param PutCodeBindingRequest $args
     * @return PutCodeBindingResponse
     */
    public function putCodeBinding(PutCodeBindingRequest $args)
    {
        $result = parent::putCodeBinding($args->toArray());
        return new PutCodeBindingResponse($result->toArray());
    }
}
