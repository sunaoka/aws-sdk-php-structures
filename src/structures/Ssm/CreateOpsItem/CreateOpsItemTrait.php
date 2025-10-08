<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateOpsItem;

trait CreateOpsItemTrait
{
    /**
     * @param CreateOpsItemRequest $args
     * @return CreateOpsItemResponse
     */
    public function createOpsItem(CreateOpsItemRequest $args)
    {
        $result = parent::createOpsItem($args->toArray());
        return new CreateOpsItemResponse($result->toArray());
    }
}
