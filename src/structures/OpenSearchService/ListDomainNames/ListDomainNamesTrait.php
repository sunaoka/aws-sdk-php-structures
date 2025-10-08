<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainNames;

trait ListDomainNamesTrait
{
    /**
     * @param ListDomainNamesRequest $args
     * @return ListDomainNamesResponse
     */
    public function listDomainNames(ListDomainNamesRequest $args)
    {
        $result = parent::listDomainNames($args->toArray());
        return new ListDomainNamesResponse($result->toArray());
    }
}
