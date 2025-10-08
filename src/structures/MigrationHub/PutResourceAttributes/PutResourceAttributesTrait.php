<?php

namespace Sunaoka\Aws\Structures\MigrationHub\PutResourceAttributes;

trait PutResourceAttributesTrait
{
    /**
     * @param PutResourceAttributesRequest $args
     * @return PutResourceAttributesResponse
     */
    public function putResourceAttributes(PutResourceAttributesRequest $args)
    {
        $result = parent::putResourceAttributes($args->toArray());
        return new PutResourceAttributesResponse($result->toArray());
    }
}
