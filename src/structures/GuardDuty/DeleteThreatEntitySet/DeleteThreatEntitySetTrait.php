<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteThreatEntitySet;

trait DeleteThreatEntitySetTrait
{
    /**
     * @param DeleteThreatEntitySetRequest $args
     * @return DeleteThreatEntitySetResponse
     */
    public function deleteThreatEntitySet(DeleteThreatEntitySetRequest $args)
    {
        $result = parent::deleteThreatEntitySet($args->toArray());
        return new DeleteThreatEntitySetResponse($result->toArray());
    }
}
