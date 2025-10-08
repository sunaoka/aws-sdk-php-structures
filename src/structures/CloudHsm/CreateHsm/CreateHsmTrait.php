<?php

namespace Sunaoka\Aws\Structures\CloudHsm\CreateHsm;

trait CreateHsmTrait
{
    /**
     * @param CreateHsmRequest $args
     * @return CreateHsmResponse
     */
    public function createHsm(CreateHsmRequest $args)
    {
        $result = parent::createHsm($args->toArray());
        return new CreateHsmResponse($result->toArray());
    }
}
