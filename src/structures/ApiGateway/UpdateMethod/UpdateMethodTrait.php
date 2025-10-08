<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateMethod;

trait UpdateMethodTrait
{
    /**
     * @param UpdateMethodRequest $args
     * @return UpdateMethodResponse
     */
    public function updateMethod(UpdateMethodRequest $args)
    {
        $result = parent::updateMethod($args->toArray());
        return new UpdateMethodResponse($result->toArray());
    }
}
