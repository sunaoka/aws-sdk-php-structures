<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeDomainEndpointOptions;

trait DescribeDomainEndpointOptionsTrait
{
    /**
     * @param DescribeDomainEndpointOptionsRequest $args
     * @return DescribeDomainEndpointOptionsResponse
     */
    public function describeDomainEndpointOptions(DescribeDomainEndpointOptionsRequest $args)
    {
        $result = parent::describeDomainEndpointOptions($args->toArray());
        return new DescribeDomainEndpointOptionsResponse($result->toArray());
    }
}
