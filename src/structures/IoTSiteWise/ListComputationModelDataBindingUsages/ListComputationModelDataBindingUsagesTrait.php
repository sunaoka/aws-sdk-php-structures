<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages;

trait ListComputationModelDataBindingUsagesTrait
{
    /**
     * @param ListComputationModelDataBindingUsagesRequest $args
     * @return ListComputationModelDataBindingUsagesResponse
     */
    public function listComputationModelDataBindingUsages(ListComputationModelDataBindingUsagesRequest $args)
    {
        $result = parent::listComputationModelDataBindingUsages($args->toArray());
        return new ListComputationModelDataBindingUsagesResponse($result->toArray());
    }
}
