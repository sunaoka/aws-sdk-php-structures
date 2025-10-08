<?php

namespace Sunaoka\Aws\Structures\Connect\ListAnalyticsDataLakeDataSets;

trait ListAnalyticsDataLakeDataSetsTrait
{
    /**
     * @param ListAnalyticsDataLakeDataSetsRequest $args
     * @return ListAnalyticsDataLakeDataSetsResponse
     */
    public function listAnalyticsDataLakeDataSets(ListAnalyticsDataLakeDataSetsRequest $args)
    {
        $result = parent::listAnalyticsDataLakeDataSets($args->toArray());
        return new ListAnalyticsDataLakeDataSetsResponse($result->toArray());
    }
}
