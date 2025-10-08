<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateMethodResponse;

trait UpdateMethodResponseTrait
{
    /**
     * @param UpdateMethodResponseRequest $args
     * @return UpdateMethodResponseResponse
     */
    public function updateMethodResponse(UpdateMethodResponseRequest $args)
    {
        $result = parent::updateMethodResponse($args->toArray());
        return new UpdateMethodResponseResponse($result->toArray());
    }
}
