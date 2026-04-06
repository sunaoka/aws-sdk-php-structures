<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteOpsItem;

trait DeleteOpsItemTrait
{
    /**
     * @param DeleteOpsItemRequest $args
     * @return DeleteOpsItemResponse
     */
    public function deleteOpsItem(DeleteOpsItemRequest $args)
    {
        $result = parent::deleteOpsItem($args->toArray());
        return new DeleteOpsItemResponse($result->toArray());
    }
}
