<?php

namespace Sunaoka\Aws\Structures\Ssm\AssociateOpsItemRelatedItem;

trait AssociateOpsItemRelatedItemTrait
{
    /**
     * @param AssociateOpsItemRelatedItemRequest $args
     * @return AssociateOpsItemRelatedItemResponse
     */
    public function associateOpsItemRelatedItem(AssociateOpsItemRelatedItemRequest $args)
    {
        $result = parent::associateOpsItemRelatedItem($args->toArray());
        return new AssociateOpsItemRelatedItemResponse($result->toArray());
    }
}
