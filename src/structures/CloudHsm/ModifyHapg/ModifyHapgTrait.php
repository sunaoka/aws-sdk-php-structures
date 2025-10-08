<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ModifyHapg;

trait ModifyHapgTrait
{
    /**
     * @param ModifyHapgRequest $args
     * @return ModifyHapgResponse
     */
    public function modifyHapg(ModifyHapgRequest $args)
    {
        $result = parent::modifyHapg($args->toArray());
        return new ModifyHapgResponse($result->toArray());
    }
}
