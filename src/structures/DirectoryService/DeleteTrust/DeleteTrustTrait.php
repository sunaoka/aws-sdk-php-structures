<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteTrust;

trait DeleteTrustTrait
{
    /**
     * @param DeleteTrustRequest $args
     * @return DeleteTrustResponse
     */
    public function deleteTrust(DeleteTrustRequest $args)
    {
        $result = parent::deleteTrust($args->toArray());
        return new DeleteTrustResponse($result->toArray());
    }
}
