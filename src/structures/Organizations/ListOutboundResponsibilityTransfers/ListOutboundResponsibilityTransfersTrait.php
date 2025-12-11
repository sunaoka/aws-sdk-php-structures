<?php

namespace Sunaoka\Aws\Structures\Organizations\ListOutboundResponsibilityTransfers;

trait ListOutboundResponsibilityTransfersTrait
{
    /**
     * @param ListOutboundResponsibilityTransfersRequest $args
     * @return ListOutboundResponsibilityTransfersResponse
     */
    public function listOutboundResponsibilityTransfers(ListOutboundResponsibilityTransfersRequest $args)
    {
        $result = parent::listOutboundResponsibilityTransfers($args->toArray());
        return new ListOutboundResponsibilityTransfersResponse($result->toArray());
    }
}
