<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateTrust;

trait UpdateTrustTrait
{
    /**
     * @param UpdateTrustRequest $args
     * @return UpdateTrustResponse
     */
    public function updateTrust(UpdateTrustRequest $args)
    {
        $result = parent::updateTrust($args->toArray());
        return new UpdateTrustResponse($result->toArray());
    }
}
