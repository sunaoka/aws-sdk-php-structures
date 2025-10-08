<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteReceiptFilter;

trait DeleteReceiptFilterTrait
{
    /**
     * @param DeleteReceiptFilterRequest $args
     * @return DeleteReceiptFilterResponse
     */
    public function deleteReceiptFilter(DeleteReceiptFilterRequest $args)
    {
        $result = parent::deleteReceiptFilter($args->toArray());
        return new DeleteReceiptFilterResponse($result->toArray());
    }
}
