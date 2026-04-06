<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteRouterOutput;

trait DeleteRouterOutputTrait
{
    /**
     * @param DeleteRouterOutputRequest $args
     * @return DeleteRouterOutputResponse
     */
    public function deleteRouterOutput(DeleteRouterOutputRequest $args)
    {
        $result = parent::deleteRouterOutput($args->toArray());
        return new DeleteRouterOutputResponse($result->toArray());
    }
}
