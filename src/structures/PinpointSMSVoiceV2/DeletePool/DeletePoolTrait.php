<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeletePool;

trait DeletePoolTrait
{
    /**
     * @param DeletePoolRequest $args
     * @return DeletePoolResponse
     */
    public function deletePool(DeletePoolRequest $args)
    {
        $result = parent::deletePool($args->toArray());
        return new DeletePoolResponse($result->toArray());
    }
}
