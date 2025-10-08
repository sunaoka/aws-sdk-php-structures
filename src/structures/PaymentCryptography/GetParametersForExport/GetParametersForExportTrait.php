<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetParametersForExport;

trait GetParametersForExportTrait
{
    /**
     * @param GetParametersForExportRequest $args
     * @return GetParametersForExportResponse
     */
    public function getParametersForExport(GetParametersForExportRequest $args)
    {
        $result = parent::getParametersForExport($args->toArray());
        return new GetParametersForExportResponse($result->toArray());
    }
}
