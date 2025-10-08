<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMailboxDetails;

trait GetMailboxDetailsTrait
{
    /**
     * @param GetMailboxDetailsRequest $args
     * @return GetMailboxDetailsResponse
     */
    public function getMailboxDetails(GetMailboxDetailsRequest $args)
    {
        $result = parent::getMailboxDetails($args->toArray());
        return new GetMailboxDetailsResponse($result->toArray());
    }
}
