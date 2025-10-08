<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteBasePathMapping;

trait DeleteBasePathMappingTrait
{
    /**
     * @param DeleteBasePathMappingRequest $args
     * @return void
     */
    public function deleteBasePathMapping(DeleteBasePathMappingRequest $args)
    {
        parent::deleteBasePathMapping($args->toArray());
    }
}
