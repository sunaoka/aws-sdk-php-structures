<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteApi;

trait DeleteApiTrait
{
    /**
     * @param DeleteApiRequest $args
     * @return void
     */
    public function deleteApi(DeleteApiRequest $args)
    {
        parent::deleteApi($args->toArray());
    }
}
