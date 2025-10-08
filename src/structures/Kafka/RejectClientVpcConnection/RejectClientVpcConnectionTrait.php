<?php

namespace Sunaoka\Aws\Structures\Kafka\RejectClientVpcConnection;

trait RejectClientVpcConnectionTrait
{
    /**
     * @param RejectClientVpcConnectionRequest $args
     * @return RejectClientVpcConnectionResponse
     */
    public function rejectClientVpcConnection(RejectClientVpcConnectionRequest $args)
    {
        $result = parent::rejectClientVpcConnection($args->toArray());
        return new RejectClientVpcConnectionResponse($result->toArray());
    }
}
