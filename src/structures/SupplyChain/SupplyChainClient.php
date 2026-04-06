<?php

namespace Sunaoka\Aws\Structures\SupplyChain;

class SupplyChainClient extends \Aws\SupplyChain\SupplyChainClient
{
    use CreateBillOfMaterialsImportJob\CreateBillOfMaterialsImportJobTrait;
    use GetBillOfMaterialsImportJob\GetBillOfMaterialsImportJobTrait;
    use SendDataIntegrationEvent\SendDataIntegrationEventTrait;
}
