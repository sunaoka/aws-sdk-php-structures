<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\RejectSupportPermitRequest;

trait RejectSupportPermitRequestTrait
{
    /**
     * @param RejectSupportPermitRequestRequest $args
     * @return RejectSupportPermitRequestResponse
     */
    public function rejectSupportPermitRequest(RejectSupportPermitRequestRequest $args)
    {
        $result = parent::rejectSupportPermitRequest($args->toArray());
        return new RejectSupportPermitRequestResponse($result->toArray());
    }
}
