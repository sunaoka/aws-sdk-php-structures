<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteHsm;

trait DeleteHsmTrait
{
    /**
     * @param DeleteHsmRequest $args
     * @return DeleteHsmResponse
     */
    public function deleteHsm(DeleteHsmRequest $args)
    {
        $result = parent::deleteHsm($args->toArray());
        return new DeleteHsmResponse($result->toArray());
    }
}
