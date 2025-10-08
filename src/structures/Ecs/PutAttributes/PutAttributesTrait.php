<?php

namespace Sunaoka\Aws\Structures\Ecs\PutAttributes;

trait PutAttributesTrait
{
    /**
     * @param PutAttributesRequest $args
     * @return PutAttributesResponse
     */
    public function putAttributes(PutAttributesRequest $args)
    {
        $result = parent::putAttributes($args->toArray());
        return new PutAttributesResponse($result->toArray());
    }
}
