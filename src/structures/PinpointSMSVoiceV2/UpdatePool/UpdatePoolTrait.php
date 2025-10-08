<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdatePool;

trait UpdatePoolTrait
{
    /**
     * @param UpdatePoolRequest $args
     * @return UpdatePoolResponse
     */
    public function updatePool(UpdatePoolRequest $args)
    {
        $result = parent::updatePool($args->toArray());
        return new UpdatePoolResponse($result->toArray());
    }
}
