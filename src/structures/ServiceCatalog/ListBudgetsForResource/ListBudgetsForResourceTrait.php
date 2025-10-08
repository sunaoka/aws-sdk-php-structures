<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListBudgetsForResource;

trait ListBudgetsForResourceTrait
{
    /**
     * @param ListBudgetsForResourceRequest $args
     * @return ListBudgetsForResourceResponse
     */
    public function listBudgetsForResource(ListBudgetsForResourceRequest $args)
    {
        $result = parent::listBudgetsForResource($args->toArray());
        return new ListBudgetsForResourceResponse($result->toArray());
    }
}
