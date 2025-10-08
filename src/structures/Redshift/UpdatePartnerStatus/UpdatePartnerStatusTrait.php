<?php

namespace Sunaoka\Aws\Structures\Redshift\UpdatePartnerStatus;

trait UpdatePartnerStatusTrait
{
    /**
     * @param UpdatePartnerStatusRequest $args
     * @return UpdatePartnerStatusResponse
     */
    public function updatePartnerStatus(UpdatePartnerStatusRequest $args)
    {
        $result = parent::updatePartnerStatus($args->toArray());
        return new UpdatePartnerStatusResponse($result->toArray());
    }
}
