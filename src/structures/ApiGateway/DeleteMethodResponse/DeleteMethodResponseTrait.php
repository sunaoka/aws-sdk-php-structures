<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteMethodResponse;

trait DeleteMethodResponseTrait
{
    /**
     * @param DeleteMethodResponseRequest $args
     * @return void
     */
    public function deleteMethodResponse(DeleteMethodResponseRequest $args)
    {
        parent::deleteMethodResponse($args->toArray());
    }
}
