<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainNodes;

trait DescribeDomainNodesTrait
{
    /**
     * @param DescribeDomainNodesRequest $args
     * @return DescribeDomainNodesResponse
     */
    public function describeDomainNodes(DescribeDomainNodesRequest $args)
    {
        $result = parent::describeDomainNodes($args->toArray());
        return new DescribeDomainNodesResponse($result->toArray());
    }
}
