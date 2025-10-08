<?php

namespace Sunaoka\Aws\Structures\MTurk\RejectQualificationRequest;

trait RejectQualificationRequestTrait
{
    /**
     * @param RejectQualificationRequestRequest $args
     * @return RejectQualificationRequestResponse
     */
    public function rejectQualificationRequest(RejectQualificationRequestRequest $args)
    {
        $result = parent::rejectQualificationRequest($args->toArray());
        return new RejectQualificationRequestResponse($result->toArray());
    }
}
