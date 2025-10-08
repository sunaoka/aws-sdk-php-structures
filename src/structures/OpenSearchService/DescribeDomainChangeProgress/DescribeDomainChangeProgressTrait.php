<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainChangeProgress;

trait DescribeDomainChangeProgressTrait
{
    /**
     * @param DescribeDomainChangeProgressRequest $args
     * @return DescribeDomainChangeProgressResponse
     */
    public function describeDomainChangeProgress(DescribeDomainChangeProgressRequest $args)
    {
        $result = parent::describeDomainChangeProgress($args->toArray());
        return new DescribeDomainChangeProgressResponse($result->toArray());
    }
}
