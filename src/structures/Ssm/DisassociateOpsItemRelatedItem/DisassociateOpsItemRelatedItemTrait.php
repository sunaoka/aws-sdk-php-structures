<?php

namespace Sunaoka\Aws\Structures\Ssm\DisassociateOpsItemRelatedItem;

trait DisassociateOpsItemRelatedItemTrait
{
    /**
     * @param DisassociateOpsItemRelatedItemRequest $args
     * @return DisassociateOpsItemRelatedItemResponse
     */
    public function disassociateOpsItemRelatedItem(DisassociateOpsItemRelatedItemRequest $args)
    {
        $result = parent::disassociateOpsItemRelatedItem($args->toArray());
        return new DisassociateOpsItemRelatedItemResponse($result->toArray());
    }
}
