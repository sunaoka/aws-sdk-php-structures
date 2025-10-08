<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutMethodResponse;

trait PutMethodResponseTrait
{
    /**
     * @param PutMethodResponseRequest $args
     * @return PutMethodResponseResponse
     */
    public function putMethodResponse(PutMethodResponseRequest $args)
    {
        $result = parent::putMethodResponse($args->toArray());
        return new PutMethodResponseResponse($result->toArray());
    }
}
