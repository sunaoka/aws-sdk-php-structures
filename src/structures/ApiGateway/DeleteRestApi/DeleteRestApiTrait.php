<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteRestApi;

trait DeleteRestApiTrait
{
    /**
     * @param DeleteRestApiRequest $args
     * @return void
     */
    public function deleteRestApi(DeleteRestApiRequest $args)
    {
        parent::deleteRestApi($args->toArray());
    }
}
