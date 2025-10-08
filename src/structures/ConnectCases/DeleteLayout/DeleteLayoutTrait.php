<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteLayout;

trait DeleteLayoutTrait
{
    /**
     * @param DeleteLayoutRequest $args
     * @return DeleteLayoutResponse
     */
    public function deleteLayout(DeleteLayoutRequest $args)
    {
        $result = parent::deleteLayout($args->toArray());
        return new DeleteLayoutResponse($result->toArray());
    }
}
