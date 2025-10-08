<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkRecovery;

trait StartSourceNetworkRecoveryTrait
{
    /**
     * @param StartSourceNetworkRecoveryRequest $args
     * @return StartSourceNetworkRecoveryResponse
     */
    public function startSourceNetworkRecovery(StartSourceNetworkRecoveryRequest $args)
    {
        $result = parent::startSourceNetworkRecovery($args->toArray());
        return new StartSourceNetworkRecoveryResponse($result->toArray());
    }
}
