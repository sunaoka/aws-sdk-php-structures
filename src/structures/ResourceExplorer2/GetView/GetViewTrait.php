<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetView;

trait GetViewTrait
{
    /**
     * @param GetViewRequest $args
     * @return GetViewResponse
     */
    public function getView(GetViewRequest $args)
    {
        $result = parent::getView($args->toArray());
        return new GetViewResponse($result->toArray());
    }
}
