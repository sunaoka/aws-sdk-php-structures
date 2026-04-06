<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetManagedView;

trait GetManagedViewTrait
{
    /**
     * @param GetManagedViewRequest $args
     * @return GetManagedViewResponse
     */
    public function getManagedView(GetManagedViewRequest $args)
    {
        $result = parent::getManagedView($args->toArray());
        return new GetManagedViewResponse($result->toArray());
    }
}
