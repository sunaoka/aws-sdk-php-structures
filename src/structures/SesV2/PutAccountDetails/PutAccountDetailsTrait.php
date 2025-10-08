<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountDetails;

trait PutAccountDetailsTrait
{
    /**
     * @param PutAccountDetailsRequest $args
     * @return PutAccountDetailsResponse
     */
    public function putAccountDetails(PutAccountDetailsRequest $args)
    {
        $result = parent::putAccountDetails($args->toArray());
        return new PutAccountDetailsResponse($result->toArray());
    }
}
