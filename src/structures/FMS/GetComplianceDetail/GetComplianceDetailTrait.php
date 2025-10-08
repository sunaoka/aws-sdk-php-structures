<?php

namespace Sunaoka\Aws\Structures\FMS\GetComplianceDetail;

trait GetComplianceDetailTrait
{
    /**
     * @param GetComplianceDetailRequest $args
     * @return GetComplianceDetailResponse
     */
    public function getComplianceDetail(GetComplianceDetailRequest $args)
    {
        $result = parent::getComplianceDetail($args->toArray());
        return new GetComplianceDetailResponse($result->toArray());
    }
}
