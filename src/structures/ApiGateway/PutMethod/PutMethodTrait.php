<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutMethod;

trait PutMethodTrait
{
    /**
     * @param PutMethodRequest $args
     * @return PutMethodResponse
     */
    public function putMethod(PutMethodRequest $args)
    {
        $result = parent::putMethod($args->toArray());
        return new PutMethodResponse($result->toArray());
    }
}
