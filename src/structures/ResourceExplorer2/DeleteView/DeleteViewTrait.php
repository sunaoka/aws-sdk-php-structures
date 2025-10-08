<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteView;

trait DeleteViewTrait
{
    /**
     * @param DeleteViewRequest $args
     * @return DeleteViewResponse
     */
    public function deleteView(DeleteViewRequest $args)
    {
        $result = parent::deleteView($args->toArray());
        return new DeleteViewResponse($result->toArray());
    }
}
