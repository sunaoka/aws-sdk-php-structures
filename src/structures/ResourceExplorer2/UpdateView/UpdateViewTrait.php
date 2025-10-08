<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateView;

trait UpdateViewTrait
{
    /**
     * @param UpdateViewRequest $args
     * @return UpdateViewResponse
     */
    public function updateView(UpdateViewRequest $args)
    {
        $result = parent::updateView($args->toArray());
        return new UpdateViewResponse($result->toArray());
    }
}
