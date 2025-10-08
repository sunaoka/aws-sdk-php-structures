<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDisassociateAnalyticsDataSet;

trait BatchDisassociateAnalyticsDataSetTrait
{
    /**
     * @param BatchDisassociateAnalyticsDataSetRequest $args
     * @return BatchDisassociateAnalyticsDataSetResponse
     */
    public function batchDisassociateAnalyticsDataSet(BatchDisassociateAnalyticsDataSetRequest $args)
    {
        $result = parent::batchDisassociateAnalyticsDataSet($args->toArray());
        return new BatchDisassociateAnalyticsDataSetResponse($result->toArray());
    }
}
