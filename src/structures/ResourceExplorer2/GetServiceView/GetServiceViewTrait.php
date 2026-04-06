<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetServiceView;

trait GetServiceViewTrait
{
    /**
     * @param GetServiceViewRequest $args
     * @return GetServiceViewResponse
     */
    public function getServiceView(GetServiceViewRequest $args)
    {
        $result = parent::getServiceView($args->toArray());
        return new GetServiceViewResponse($result->toArray());
    }
}
