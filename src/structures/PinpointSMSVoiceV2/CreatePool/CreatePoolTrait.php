<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreatePool;

trait CreatePoolTrait
{
    /**
     * @param CreatePoolRequest $args
     * @return CreatePoolResponse
     */
    public function createPool(CreatePoolRequest $args)
    {
        $result = parent::createPool($args->toArray());
        return new CreatePoolResponse($result->toArray());
    }
}
