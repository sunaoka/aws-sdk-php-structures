<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout;

trait UpdateLayoutTrait
{
    /**
     * @param UpdateLayoutRequest $args
     * @return UpdateLayoutResponse
     */
    public function updateLayout(UpdateLayoutRequest $args)
    {
        $result = parent::updateLayout($args->toArray());
        return new UpdateLayoutResponse($result->toArray());
    }
}
