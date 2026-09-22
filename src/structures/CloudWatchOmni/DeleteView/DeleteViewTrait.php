<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteView;

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
