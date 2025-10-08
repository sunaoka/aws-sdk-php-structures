<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceItems;

trait ListComplianceItemsTrait
{
    /**
     * @param ListComplianceItemsRequest $args
     * @return ListComplianceItemsResponse
     */
    public function listComplianceItems(ListComplianceItemsRequest $args)
    {
        $result = parent::listComplianceItems($args->toArray());
        return new ListComplianceItemsResponse($result->toArray());
    }
}
