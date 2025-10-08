<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailDomains;

trait ListMailDomainsTrait
{
    /**
     * @param ListMailDomainsRequest $args
     * @return ListMailDomainsResponse
     */
    public function listMailDomains(ListMailDomainsRequest $args)
    {
        $result = parent::listMailDomains($args->toArray());
        return new ListMailDomainsResponse($result->toArray());
    }
}
