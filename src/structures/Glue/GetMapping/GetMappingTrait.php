<?php

namespace Sunaoka\Aws\Structures\Glue\GetMapping;

trait GetMappingTrait
{
    /**
     * @param GetMappingRequest $args
     * @return GetMappingResponse
     */
    public function getMapping(GetMappingRequest $args)
    {
        $result = parent::getMapping($args->toArray());
        return new GetMappingResponse($result->toArray());
    }
}
