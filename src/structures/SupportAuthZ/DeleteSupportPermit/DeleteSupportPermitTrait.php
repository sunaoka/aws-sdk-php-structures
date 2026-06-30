<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\DeleteSupportPermit;

trait DeleteSupportPermitTrait
{
    /**
     * @param DeleteSupportPermitRequest $args
     * @return DeleteSupportPermitResponse
     */
    public function deleteSupportPermit(DeleteSupportPermitRequest $args)
    {
        $result = parent::deleteSupportPermit($args->toArray());
        return new DeleteSupportPermitResponse($result->toArray());
    }
}
