<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListInstanceTypeDetails;

trait ListInstanceTypeDetailsTrait
{
    /**
     * @param ListInstanceTypeDetailsRequest $args
     * @return ListInstanceTypeDetailsResponse
     */
    public function listInstanceTypeDetails(ListInstanceTypeDetailsRequest $args)
    {
        $result = parent::listInstanceTypeDetails($args->toArray());
        return new ListInstanceTypeDetailsResponse($result->toArray());
    }
}
