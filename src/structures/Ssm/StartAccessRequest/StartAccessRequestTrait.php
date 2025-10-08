<?php

namespace Sunaoka\Aws\Structures\Ssm\StartAccessRequest;

trait StartAccessRequestTrait
{
    /**
     * @param StartAccessRequestRequest $args
     * @return StartAccessRequestResponse
     */
    public function startAccessRequest(StartAccessRequestRequest $args)
    {
        $result = parent::startAccessRequest($args->toArray());
        return new StartAccessRequestResponse($result->toArray());
    }
}
