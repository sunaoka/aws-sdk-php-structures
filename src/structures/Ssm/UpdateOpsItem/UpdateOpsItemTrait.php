<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateOpsItem;

trait UpdateOpsItemTrait
{
    /**
     * @param UpdateOpsItemRequest $args
     * @return UpdateOpsItemResponse
     */
    public function updateOpsItem(UpdateOpsItemRequest $args)
    {
        $result = parent::updateOpsItem($args->toArray());
        return new UpdateOpsItemResponse($result->toArray());
    }
}
