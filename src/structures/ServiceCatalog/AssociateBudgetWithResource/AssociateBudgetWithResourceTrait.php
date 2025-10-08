<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociateBudgetWithResource;

trait AssociateBudgetWithResourceTrait
{
    /**
     * @param AssociateBudgetWithResourceRequest $args
     * @return AssociateBudgetWithResourceResponse
     */
    public function associateBudgetWithResource(AssociateBudgetWithResourceRequest $args)
    {
        $result = parent::associateBudgetWithResource($args->toArray());
        return new AssociateBudgetWithResourceResponse($result->toArray());
    }
}
