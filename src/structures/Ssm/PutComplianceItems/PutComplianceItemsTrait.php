<?php

namespace Sunaoka\Aws\Structures\Ssm\PutComplianceItems;

trait PutComplianceItemsTrait
{
    /**
     * @param PutComplianceItemsRequest $args
     * @return PutComplianceItemsResponse
     */
    public function putComplianceItems(PutComplianceItemsRequest $args)
    {
        $result = parent::putComplianceItems($args->toArray());
        return new PutComplianceItemsResponse($result->toArray());
    }
}
