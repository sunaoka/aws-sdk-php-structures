<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteResource;

trait DeleteResourceTrait
{
    /**
     * @param DeleteResourceRequest $args
     * @return void
     */
    public function deleteResource(DeleteResourceRequest $args)
    {
        parent::deleteResource($args->toArray());
    }
}
