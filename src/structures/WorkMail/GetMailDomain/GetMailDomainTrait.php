<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMailDomain;

trait GetMailDomainTrait
{
    /**
     * @param GetMailDomainRequest $args
     * @return GetMailDomainResponse
     */
    public function getMailDomain(GetMailDomainRequest $args)
    {
        $result = parent::getMailDomain($args->toArray());
        return new GetMailDomainResponse($result->toArray());
    }
}
