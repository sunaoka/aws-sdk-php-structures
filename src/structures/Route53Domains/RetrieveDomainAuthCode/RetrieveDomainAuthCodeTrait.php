<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RetrieveDomainAuthCode;

trait RetrieveDomainAuthCodeTrait
{
    /**
     * @param RetrieveDomainAuthCodeRequest $args
     * @return RetrieveDomainAuthCodeResponse
     */
    public function retrieveDomainAuthCode(RetrieveDomainAuthCodeRequest $args)
    {
        $result = parent::retrieveDomainAuthCode($args->toArray());
        return new RetrieveDomainAuthCodeResponse($result->toArray());
    }
}
