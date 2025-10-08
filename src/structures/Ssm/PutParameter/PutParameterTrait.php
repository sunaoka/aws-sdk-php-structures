<?php

namespace Sunaoka\Aws\Structures\Ssm\PutParameter;

trait PutParameterTrait
{
    /**
     * @param PutParameterRequest $args
     * @return PutParameterResponse
     */
    public function putParameter(PutParameterRequest $args)
    {
        $result = parent::putParameter($args->toArray());
        return new PutParameterResponse($result->toArray());
    }
}
