<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ResendContactReachabilityEmail;

trait ResendContactReachabilityEmailTrait
{
    /**
     * @param ResendContactReachabilityEmailRequest $args
     * @return ResendContactReachabilityEmailResponse
     */
    public function resendContactReachabilityEmail(ResendContactReachabilityEmailRequest $args)
    {
        $result = parent::resendContactReachabilityEmail($args->toArray());
        return new ResendContactReachabilityEmailResponse($result->toArray());
    }
}
