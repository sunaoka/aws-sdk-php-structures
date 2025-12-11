<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListInsightsData;

trait ListInsightsDataTrait
{
    /**
     * @param ListInsightsDataRequest $args
     * @return ListInsightsDataResponse
     */
    public function listInsightsData(ListInsightsDataRequest $args)
    {
        $result = parent::listInsightsData($args->toArray());
        return new ListInsightsDataResponse($result->toArray());
    }
}
