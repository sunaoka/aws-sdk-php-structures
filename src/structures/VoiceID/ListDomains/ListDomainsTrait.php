<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListDomains;

trait ListDomainsTrait
{
    /**
     * @param ListDomainsRequest $args
     * @return ListDomainsResponse
     */
    public function listDomains(ListDomainsRequest $args)
    {
        $result = parent::listDomains($args->toArray());
        return new ListDomainsResponse($result->toArray());
    }
}
