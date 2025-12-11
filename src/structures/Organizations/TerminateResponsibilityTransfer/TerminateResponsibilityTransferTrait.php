<?php

namespace Sunaoka\Aws\Structures\Organizations\TerminateResponsibilityTransfer;

trait TerminateResponsibilityTransferTrait
{
    /**
     * @param TerminateResponsibilityTransferRequest $args
     * @return TerminateResponsibilityTransferResponse
     */
    public function terminateResponsibilityTransfer(TerminateResponsibilityTransferRequest $args)
    {
        $result = parent::terminateResponsibilityTransfer($args->toArray());
        return new TerminateResponsibilityTransferResponse($result->toArray());
    }
}
