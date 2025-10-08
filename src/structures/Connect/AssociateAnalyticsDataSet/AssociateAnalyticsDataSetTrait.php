<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateAnalyticsDataSet;

trait AssociateAnalyticsDataSetTrait
{
    /**
     * @param AssociateAnalyticsDataSetRequest $args
     * @return AssociateAnalyticsDataSetResponse
     */
    public function associateAnalyticsDataSet(AssociateAnalyticsDataSetRequest $args)
    {
        $result = parent::associateAnalyticsDataSet($args->toArray());
        return new AssociateAnalyticsDataSetResponse($result->toArray());
    }
}
