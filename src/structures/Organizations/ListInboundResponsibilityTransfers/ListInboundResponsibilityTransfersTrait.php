<?php

namespace Sunaoka\Aws\Structures\Organizations\ListInboundResponsibilityTransfers;

trait ListInboundResponsibilityTransfersTrait
{
    /**
     * @param ListInboundResponsibilityTransfersRequest $args
     * @return ListInboundResponsibilityTransfersResponse
     */
    public function listInboundResponsibilityTransfers(ListInboundResponsibilityTransfersRequest $args)
    {
        $result = parent::listInboundResponsibilityTransfers($args->toArray());
        return new ListInboundResponsibilityTransfersResponse($result->toArray());
    }
}
