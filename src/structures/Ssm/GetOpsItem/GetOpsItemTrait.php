<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsItem;

trait GetOpsItemTrait
{
    /**
     * @param GetOpsItemRequest $args
     * @return GetOpsItemResponse
     */
    public function getOpsItem(GetOpsItemRequest $args)
    {
        $result = parent::getOpsItem($args->toArray());
        return new GetOpsItemResponse($result->toArray());
    }
}
