<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainReplication;

trait DescribeDomainReplicationTrait
{
    /**
     * @param DescribeDomainReplicationRequest $args
     * @return DescribeDomainReplicationResponse
     */
    public function describeDomainReplication(DescribeDomainReplicationRequest $args)
    {
        $result = parent::describeDomainReplication($args->toArray());
        return new DescribeDomainReplicationResponse($result->toArray());
    }
}
