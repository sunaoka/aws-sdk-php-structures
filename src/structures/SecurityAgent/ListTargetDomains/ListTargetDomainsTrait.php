<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListTargetDomains;

trait ListTargetDomainsTrait
{
    /**
     * @param ListTargetDomainsRequest $args
     * @return ListTargetDomainsResponse
     */
    public function listTargetDomains(ListTargetDomainsRequest $args)
    {
        $result = parent::listTargetDomains($args->toArray());
        return new ListTargetDomainsResponse($result->toArray());
    }
}
