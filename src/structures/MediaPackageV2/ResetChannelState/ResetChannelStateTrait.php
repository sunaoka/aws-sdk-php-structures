<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ResetChannelState;

trait ResetChannelStateTrait
{
    /**
     * @param ResetChannelStateRequest $args
     * @return ResetChannelStateResponse
     */
    public function resetChannelState(ResetChannelStateRequest $args)
    {
        $result = parent::resetChannelState($args->toArray());
        return new ResetChannelStateResponse($result->toArray());
    }
}
