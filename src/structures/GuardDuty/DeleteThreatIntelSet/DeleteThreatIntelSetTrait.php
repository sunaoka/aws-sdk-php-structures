<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteThreatIntelSet;

trait DeleteThreatIntelSetTrait
{
    /**
     * @param DeleteThreatIntelSetRequest $args
     * @return DeleteThreatIntelSetResponse
     */
    public function deleteThreatIntelSet(DeleteThreatIntelSetRequest $args)
    {
        $result = parent::deleteThreatIntelSet($args->toArray());
        return new DeleteThreatIntelSetResponse($result->toArray());
    }
}
