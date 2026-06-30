<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\GetSupportPermit;

trait GetSupportPermitTrait
{
    /**
     * @param GetSupportPermitRequest $args
     * @return GetSupportPermitResponse
     */
    public function getSupportPermit(GetSupportPermitRequest $args)
    {
        $result = parent::getSupportPermit($args->toArray());
        return new GetSupportPermitResponse($result->toArray());
    }
}
