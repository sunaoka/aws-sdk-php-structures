<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteTrustedEntitySet;

trait DeleteTrustedEntitySetTrait
{
    /**
     * @param DeleteTrustedEntitySetRequest $args
     * @return DeleteTrustedEntitySetResponse
     */
    public function deleteTrustedEntitySet(DeleteTrustedEntitySetRequest $args)
    {
        $result = parent::deleteTrustedEntitySet($args->toArray());
        return new DeleteTrustedEntitySetResponse($result->toArray());
    }
}
