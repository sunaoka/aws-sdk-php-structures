<?php

namespace Sunaoka\Aws\Structures\Transfer\StartFileTransfer;

trait StartFileTransferTrait
{
    /**
     * @param StartFileTransferRequest $args
     * @return StartFileTransferResponse
     */
    public function startFileTransfer(StartFileTransferRequest $args)
    {
        $result = parent::startFileTransfer($args->toArray());
        return new StartFileTransferResponse($result->toArray());
    }
}
