<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmConnection;

trait ConfirmConnectionTrait
{
    /**
     * @param ConfirmConnectionRequest $args
     * @return ConfirmConnectionResponse
     */
    public function confirmConnection(ConfirmConnectionRequest $args)
    {
        $result = parent::confirmConnection($args->toArray());
        return new ConfirmConnectionResponse($result->toArray());
    }
}
