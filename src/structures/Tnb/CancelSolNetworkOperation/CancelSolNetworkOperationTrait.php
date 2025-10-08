<?php

namespace Sunaoka\Aws\Structures\Tnb\CancelSolNetworkOperation;

trait CancelSolNetworkOperationTrait
{
    /**
     * @param CancelSolNetworkOperationRequest $args
     * @return void
     */
    public function cancelSolNetworkOperation(CancelSolNetworkOperationRequest $args)
    {
        parent::cancelSolNetworkOperation($args->toArray());
    }
}
