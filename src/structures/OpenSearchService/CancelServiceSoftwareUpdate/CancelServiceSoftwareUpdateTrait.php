<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CancelServiceSoftwareUpdate;

trait CancelServiceSoftwareUpdateTrait
{
    /**
     * @param CancelServiceSoftwareUpdateRequest $args
     * @return CancelServiceSoftwareUpdateResponse
     */
    public function cancelServiceSoftwareUpdate(CancelServiceSoftwareUpdateRequest $args)
    {
        $result = parent::cancelServiceSoftwareUpdate($args->toArray());
        return new CancelServiceSoftwareUpdateResponse($result->toArray());
    }
}
