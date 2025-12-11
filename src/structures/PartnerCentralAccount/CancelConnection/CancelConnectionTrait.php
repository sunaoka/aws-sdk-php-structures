<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CancelConnection;

trait CancelConnectionTrait
{
    /**
     * @param CancelConnectionRequest $args
     * @return CancelConnectionResponse
     */
    public function cancelConnection(CancelConnectionRequest $args)
    {
        $result = parent::cancelConnection($args->toArray());
        return new CancelConnectionResponse($result->toArray());
    }
}
