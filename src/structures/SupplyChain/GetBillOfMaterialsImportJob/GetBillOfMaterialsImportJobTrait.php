<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetBillOfMaterialsImportJob;

trait GetBillOfMaterialsImportJobTrait
{
    /**
     * @param GetBillOfMaterialsImportJobRequest $args
     * @return GetBillOfMaterialsImportJobResponse
     */
    public function getBillOfMaterialsImportJob(GetBillOfMaterialsImportJobRequest $args)
    {
        $result = parent::getBillOfMaterialsImportJob($args->toArray());
        return new GetBillOfMaterialsImportJobResponse($result->toArray());
    }
}
