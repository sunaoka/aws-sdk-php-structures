<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ModifyHsm;

trait ModifyHsmTrait
{
    /**
     * @param ModifyHsmRequest $args
     * @return ModifyHsmResponse
     */
    public function modifyHsm(ModifyHsmRequest $args)
    {
        $result = parent::modifyHsm($args->toArray());
        return new ModifyHsmResponse($result->toArray());
    }
}
