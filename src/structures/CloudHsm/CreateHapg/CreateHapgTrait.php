<?php

namespace Sunaoka\Aws\Structures\CloudHsm\CreateHapg;

trait CreateHapgTrait
{
    /**
     * @param CreateHapgRequest $args
     * @return CreateHapgResponse
     */
    public function createHapg(CreateHapgRequest $args)
    {
        $result = parent::createHapg($args->toArray());
        return new CreateHapgResponse($result->toArray());
    }
}
