<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListServiceActions;

trait ListServiceActionsTrait
{
    /**
     * @param ListServiceActionsRequest $args
     * @return ListServiceActionsResponse
     */
    public function listServiceActions(ListServiceActionsRequest $args)
    {
        $result = parent::listServiceActions($args->toArray());
        return new ListServiceActionsResponse($result->toArray());
    }
}
