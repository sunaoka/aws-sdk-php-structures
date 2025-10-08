<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDomainName;

trait GetDomainNameTrait
{
    /**
     * @param GetDomainNameRequest $args
     * @return GetDomainNameResponse
     */
    public function getDomainName(GetDomainNameRequest $args)
    {
        $result = parent::getDomainName($args->toArray());
        return new GetDomainNameResponse($result->toArray());
    }
}
