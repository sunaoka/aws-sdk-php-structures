<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CancelMulticastGroupSession;

trait CancelMulticastGroupSessionTrait
{
    /**
     * @param CancelMulticastGroupSessionRequest $args
     * @return CancelMulticastGroupSessionResponse
     */
    public function cancelMulticastGroupSession(CancelMulticastGroupSessionRequest $args)
    {
        $result = parent::cancelMulticastGroupSession($args->toArray());
        return new CancelMulticastGroupSessionResponse($result->toArray());
    }
}
