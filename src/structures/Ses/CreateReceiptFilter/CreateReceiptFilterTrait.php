<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptFilter;

trait CreateReceiptFilterTrait
{
    /**
     * @param CreateReceiptFilterRequest $args
     * @return CreateReceiptFilterResponse
     */
    public function createReceiptFilter(CreateReceiptFilterRequest $args)
    {
        $result = parent::createReceiptFilter($args->toArray());
        return new CreateReceiptFilterResponse($result->toArray());
    }
}
