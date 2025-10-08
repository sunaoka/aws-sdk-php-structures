<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DeleteHapg;

trait DeleteHapgTrait
{
    /**
     * @param DeleteHapgRequest $args
     * @return DeleteHapgResponse
     */
    public function deleteHapg(DeleteHapgRequest $args)
    {
        $result = parent::deleteHapg($args->toArray());
        return new DeleteHapgResponse($result->toArray());
    }
}
