<?php

namespace Sunaoka\Aws\Structures\Organizations\UpdateResponsibilityTransfer;

trait UpdateResponsibilityTransferTrait
{
    /**
     * @param UpdateResponsibilityTransferRequest $args
     * @return UpdateResponsibilityTransferResponse
     */
    public function updateResponsibilityTransfer(UpdateResponsibilityTransferRequest $args)
    {
        $result = parent::updateResponsibilityTransfer($args->toArray());
        return new UpdateResponsibilityTransferResponse($result->toArray());
    }
}
