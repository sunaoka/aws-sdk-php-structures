<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageReceipts;

trait ListPageReceiptsTrait
{
    /**
     * @param ListPageReceiptsRequest $args
     * @return ListPageReceiptsResponse
     */
    public function listPageReceipts(ListPageReceiptsRequest $args)
    {
        $result = parent::listPageReceipts($args->toArray());
        return new ListPageReceiptsResponse($result->toArray());
    }
}
