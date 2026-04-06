<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\UpdateServerEngineAttributes;

trait UpdateServerEngineAttributesTrait
{
    /**
     * @param UpdateServerEngineAttributesRequest $args
     * @return UpdateServerEngineAttributesResponse
     */
    public function updateServerEngineAttributes(UpdateServerEngineAttributesRequest $args)
    {
        $result = parent::updateServerEngineAttributes($args->toArray());
        return new UpdateServerEngineAttributesResponse($result->toArray());
    }
}
