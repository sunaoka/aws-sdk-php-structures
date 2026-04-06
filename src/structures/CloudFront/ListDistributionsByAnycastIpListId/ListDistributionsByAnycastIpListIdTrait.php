<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByAnycastIpListId;

trait ListDistributionsByAnycastIpListIdTrait
{
    /**
     * @param ListDistributionsByAnycastIpListIdRequest $args
     * @return ListDistributionsByAnycastIpListIdResponse
     */
    public function listDistributionsByAnycastIpListId(ListDistributionsByAnycastIpListIdRequest $args)
    {
        $result = parent::listDistributionsByAnycastIpListId($args->toArray());
        return new ListDistributionsByAnycastIpListIdResponse($result->toArray());
    }
}
