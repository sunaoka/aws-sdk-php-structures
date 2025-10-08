<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceDetailsByResource;

trait GetComplianceDetailsByResourceTrait
{
    /**
     * @param GetComplianceDetailsByResourceRequest $args
     * @return GetComplianceDetailsByResourceResponse
     */
    public function getComplianceDetailsByResource(GetComplianceDetailsByResourceRequest $args)
    {
        $result = parent::getComplianceDetailsByResource($args->toArray());
        return new GetComplianceDetailsByResourceResponse($result->toArray());
    }
}
