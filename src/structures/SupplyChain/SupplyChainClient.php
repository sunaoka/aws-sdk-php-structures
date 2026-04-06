<?php

namespace Sunaoka\Aws\Structures\SupplyChain;

class SupplyChainClient extends \Aws\SupplyChain\SupplyChainClient
{
    use CreateBillOfMaterialsImportJob\CreateBillOfMaterialsImportJobTrait;
    use CreateDataIntegrationFlow\CreateDataIntegrationFlowTrait;
    use CreateDataLakeDataset\CreateDataLakeDatasetTrait;
    use CreateInstance\CreateInstanceTrait;
    use DeleteDataIntegrationFlow\DeleteDataIntegrationFlowTrait;
    use DeleteDataLakeDataset\DeleteDataLakeDatasetTrait;
    use DeleteInstance\DeleteInstanceTrait;
    use GetBillOfMaterialsImportJob\GetBillOfMaterialsImportJobTrait;
    use GetDataIntegrationFlow\GetDataIntegrationFlowTrait;
    use GetDataLakeDataset\GetDataLakeDatasetTrait;
    use GetInstance\GetInstanceTrait;
    use ListDataIntegrationFlows\ListDataIntegrationFlowsTrait;
    use ListDataLakeDatasets\ListDataLakeDatasetsTrait;
    use ListInstances\ListInstancesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SendDataIntegrationEvent\SendDataIntegrationEventTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDataIntegrationFlow\UpdateDataIntegrationFlowTrait;
    use UpdateDataLakeDataset\UpdateDataLakeDatasetTrait;
    use UpdateInstance\UpdateInstanceTrait;
}
