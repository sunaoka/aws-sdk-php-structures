<?php

namespace Sunaoka\Aws\Structures\Connect\ListAnalyticsDataAssociations;

trait ListAnalyticsDataAssociationsTrait
{
    /**
     * @param ListAnalyticsDataAssociationsRequest $args
     * @return ListAnalyticsDataAssociationsResponse
     */
    public function listAnalyticsDataAssociations(ListAnalyticsDataAssociationsRequest $args)
    {
        $result = parent::listAnalyticsDataAssociations($args->toArray());
        return new ListAnalyticsDataAssociationsResponse($result->toArray());
    }
}
