<?php

namespace Sunaoka\Aws\Structures\Connect\BatchAssociateAnalyticsDataSet;

trait BatchAssociateAnalyticsDataSetTrait
{
    /**
     * @param BatchAssociateAnalyticsDataSetRequest $args
     * @return BatchAssociateAnalyticsDataSetResponse
     */
    public function batchAssociateAnalyticsDataSet(BatchAssociateAnalyticsDataSetRequest $args)
    {
        $result = parent::batchAssociateAnalyticsDataSet($args->toArray());
        return new BatchAssociateAnalyticsDataSetResponse($result->toArray());
    }
}
