<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RollbackServiceSoftwareUpdate;

trait RollbackServiceSoftwareUpdateTrait
{
    /**
     * @param RollbackServiceSoftwareUpdateRequest $args
     * @return RollbackServiceSoftwareUpdateResponse
     */
    public function rollbackServiceSoftwareUpdate(RollbackServiceSoftwareUpdateRequest $args)
    {
        $result = parent::rollbackServiceSoftwareUpdate($args->toArray());
        return new RollbackServiceSoftwareUpdateResponse($result->toArray());
    }
}
