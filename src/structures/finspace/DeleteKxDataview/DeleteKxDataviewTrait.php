<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxDataview;

trait DeleteKxDataviewTrait
{
    /**
     * @param DeleteKxDataviewRequest $args
     * @return DeleteKxDataviewResponse
     */
    public function deleteKxDataview(DeleteKxDataviewRequest $args)
    {
        $result = parent::deleteKxDataview($args->toArray());
        return new DeleteKxDataviewResponse($result->toArray());
    }
}
