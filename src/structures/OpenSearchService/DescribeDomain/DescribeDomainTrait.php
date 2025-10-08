<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomain;

trait DescribeDomainTrait
{
    /**
     * @param DescribeDomainRequest $args
     * @return DescribeDomainResponse
     */
    public function describeDomain(DescribeDomainRequest $args)
    {
        $result = parent::describeDomain($args->toArray());
        return new DescribeDomainResponse($result->toArray());
    }
}
