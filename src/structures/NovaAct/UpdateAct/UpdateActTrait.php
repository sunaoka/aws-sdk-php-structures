<?php

namespace Sunaoka\Aws\Structures\NovaAct\UpdateAct;

trait UpdateActTrait
{
    /**
     * @param UpdateActRequest $args
     * @return UpdateActResponse
     */
    public function updateAct(UpdateActRequest $args)
    {
        $result = parent::updateAct($args->toArray());
        return new UpdateActResponse($result->toArray());
    }
}
