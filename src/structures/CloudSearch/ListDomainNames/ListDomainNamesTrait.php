<?php

namespace Sunaoka\Aws\Structures\CloudSearch\ListDomainNames;

trait ListDomainNamesTrait
{
    /**
     * @return ListDomainNamesResponse
     */
    public function listDomainNames()
    {
        $result = parent::listDomainNames();
        return new ListDomainNamesResponse($result->toArray());
    }
}
