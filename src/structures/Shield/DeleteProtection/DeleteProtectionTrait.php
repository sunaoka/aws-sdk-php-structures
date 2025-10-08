<?php

namespace Sunaoka\Aws\Structures\Shield\DeleteProtection;

trait DeleteProtectionTrait
{
    /**
     * @param DeleteProtectionRequest $args
     * @return DeleteProtectionResponse
     */
    public function deleteProtection(DeleteProtectionRequest $args)
    {
        $result = parent::deleteProtection($args->toArray());
        return new DeleteProtectionResponse($result->toArray());
    }
}
