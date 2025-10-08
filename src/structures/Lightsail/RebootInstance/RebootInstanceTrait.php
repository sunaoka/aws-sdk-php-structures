<?php

namespace Sunaoka\Aws\Structures\Lightsail\RebootInstance;

trait RebootInstanceTrait
{
    /**
     * @param RebootInstanceRequest $args
     * @return RebootInstanceResponse
     */
    public function rebootInstance(RebootInstanceRequest $args)
    {
        $result = parent::rebootInstance($args->toArray());
        return new RebootInstanceResponse($result->toArray());
    }
}
