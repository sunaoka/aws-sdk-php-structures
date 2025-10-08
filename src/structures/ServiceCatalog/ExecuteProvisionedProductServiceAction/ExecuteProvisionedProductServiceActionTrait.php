<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ExecuteProvisionedProductServiceAction;

trait ExecuteProvisionedProductServiceActionTrait
{
    /**
     * @param ExecuteProvisionedProductServiceActionRequest $args
     * @return ExecuteProvisionedProductServiceActionResponse
     */
    public function executeProvisionedProductServiceAction(ExecuteProvisionedProductServiceActionRequest $args)
    {
        $result = parent::executeProvisionedProductServiceAction($args->toArray());
        return new ExecuteProvisionedProductServiceActionResponse($result->toArray());
    }
}
