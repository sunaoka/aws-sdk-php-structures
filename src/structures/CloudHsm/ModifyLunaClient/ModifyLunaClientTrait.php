<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ModifyLunaClient;

trait ModifyLunaClientTrait
{
    /**
     * @param ModifyLunaClientRequest $args
     * @return ModifyLunaClientResponse
     */
    public function modifyLunaClient(ModifyLunaClientRequest $args)
    {
        $result = parent::modifyLunaClient($args->toArray());
        return new ModifyLunaClientResponse($result->toArray());
    }
}
