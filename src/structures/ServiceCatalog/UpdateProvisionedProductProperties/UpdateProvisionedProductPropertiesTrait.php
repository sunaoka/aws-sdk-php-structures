<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProductProperties;

trait UpdateProvisionedProductPropertiesTrait
{
    /**
     * @param UpdateProvisionedProductPropertiesRequest $args
     * @return UpdateProvisionedProductPropertiesResponse
     */
    public function updateProvisionedProductProperties(UpdateProvisionedProductPropertiesRequest $args)
    {
        $result = parent::updateProvisionedProductProperties($args->toArray());
        return new UpdateProvisionedProductPropertiesResponse($result->toArray());
    }
}
