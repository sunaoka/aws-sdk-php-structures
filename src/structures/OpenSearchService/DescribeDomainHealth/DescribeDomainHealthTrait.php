<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainHealth;

trait DescribeDomainHealthTrait
{
    /**
     * @param DescribeDomainHealthRequest $args
     * @return DescribeDomainHealthResponse
     */
    public function describeDomainHealth(DescribeDomainHealthRequest $args)
    {
        $result = parent::describeDomainHealth($args->toArray());
        return new DescribeDomainHealthResponse($result->toArray());
    }
}
