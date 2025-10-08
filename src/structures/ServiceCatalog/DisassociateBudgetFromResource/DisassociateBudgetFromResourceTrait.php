<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociateBudgetFromResource;

trait DisassociateBudgetFromResourceTrait
{
    /**
     * @param DisassociateBudgetFromResourceRequest $args
     * @return DisassociateBudgetFromResourceResponse
     */
    public function disassociateBudgetFromResource(DisassociateBudgetFromResourceRequest $args)
    {
        $result = parent::disassociateBudgetFromResource($args->toArray());
        return new DisassociateBudgetFromResourceResponse($result->toArray());
    }
}
