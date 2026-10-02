<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\DeleteWebFunctionEndpoint;

trait DeleteWebFunctionEndpointTrait
{
    /**
     * @param DeleteWebFunctionEndpointRequest $args
     * @return void
     */
    public function deleteWebFunctionEndpoint(DeleteWebFunctionEndpointRequest $args)
    {
        parent::deleteWebFunctionEndpoint($args->toArray());
    }
}
