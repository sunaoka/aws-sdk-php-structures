<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateBillOfMaterialsImportJob;

trait CreateBillOfMaterialsImportJobTrait
{
    /**
     * @param CreateBillOfMaterialsImportJobRequest $args
     * @return CreateBillOfMaterialsImportJobResponse
     */
    public function createBillOfMaterialsImportJob(CreateBillOfMaterialsImportJobRequest $args)
    {
        $result = parent::createBillOfMaterialsImportJob($args->toArray());
        return new CreateBillOfMaterialsImportJobResponse($result->toArray());
    }
}
