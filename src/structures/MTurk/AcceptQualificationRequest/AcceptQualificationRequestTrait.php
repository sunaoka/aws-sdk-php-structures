<?php

namespace Sunaoka\Aws\Structures\MTurk\AcceptQualificationRequest;

trait AcceptQualificationRequestTrait
{
    /**
     * @param AcceptQualificationRequestRequest $args
     * @return AcceptQualificationRequestResponse
     */
    public function acceptQualificationRequest(AcceptQualificationRequestRequest $args)
    {
        $result = parent::acceptQualificationRequest($args->toArray());
        return new AcceptQualificationRequestResponse($result->toArray());
    }
}
