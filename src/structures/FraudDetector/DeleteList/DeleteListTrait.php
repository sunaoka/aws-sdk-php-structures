<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteList;

trait DeleteListTrait
{
    /**
     * @param DeleteListRequest $args
     * @return DeleteListResponse
     */
    public function deleteList(DeleteListRequest $args)
    {
        $result = parent::deleteList($args->toArray());
        return new DeleteListResponse($result->toArray());
    }
}
