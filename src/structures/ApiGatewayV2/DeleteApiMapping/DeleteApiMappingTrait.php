<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteApiMapping;

trait DeleteApiMappingTrait
{
    /**
     * @param DeleteApiMappingRequest $args
     * @return void
     */
    public function deleteApiMapping(DeleteApiMappingRequest $args)
    {
        parent::deleteApiMapping($args->toArray());
    }
}
