<?php

namespace Sunaoka\Aws\Structures\SupplyChain;

class SupplyChainClient extends \Aws\SupplyChain\SupplyChainClient
{
    use CreateBillOfMaterialsImportJob\CreateBillOfMaterialsImportJobTrait;
    use CreateDataIntegrationFlow\CreateDataIntegrationFlowTrait;
    use CreateDataLakeDataset\CreateDataLakeDatasetTrait;
    use CreateDataLakeNamespace\CreateDataLakeNamespaceTrait;
    use CreateInstance\CreateInstanceTrait;
    use DeleteDataIntegrationFlow\DeleteDataIntegrationFlowTrait;
    use DeleteDataLakeDataset\DeleteDataLakeDatasetTrait;
    use DeleteDataLakeNamespace\DeleteDataLakeNamespaceTrait;
    use DeleteInstance\DeleteInstanceTrait;
    use GetBillOfMaterialsImportJob\GetBillOfMaterialsImportJobTrait;
    use GetDataIntegrationEvent\GetDataIntegrationEventTrait;
    use GetDataIntegrationFlow\GetDataIntegrationFlowTrait;
    use GetDataIntegrationFlowExecution\GetDataIntegrationFlowExecutionTrait;
    use GetDataLakeDataset\GetDataLakeDatasetTrait;
    use GetDataLakeNamespace\GetDataLakeNamespaceTrait;
    use GetInstance\GetInstanceTrait;
    use ListDataIntegrationEvents\ListDataIntegrationEventsTrait;
    use ListDataIntegrationFlowExecutions\ListDataIntegrationFlowExecutionsTrait;
    use ListDataIntegrationFlows\ListDataIntegrationFlowsTrait;
    use ListDataLakeDatasets\ListDataLakeDatasetsTrait;
    use ListDataLakeNamespaces\ListDataLakeNamespacesTrait;
    use ListInstances\ListInstancesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SendDataIntegrationEvent\SendDataIntegrationEventTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDataIntegrationFlow\UpdateDataIntegrationFlowTrait;
    use UpdateDataLakeDataset\UpdateDataLakeDatasetTrait;
    use UpdateDataLakeNamespace\UpdateDataLakeNamespaceTrait;
    use UpdateInstance\UpdateInstanceTrait;
}
