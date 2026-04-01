<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates;

trait SearchCertificatesTrait
{
    /**
     * @param SearchCertificatesRequest $args
     * @return SearchCertificatesResponse
     */
    public function searchCertificates(SearchCertificatesRequest $args)
    {
        $result = parent::searchCertificates($args->toArray());
        return new SearchCertificatesResponse($result->toArray());
    }
}
