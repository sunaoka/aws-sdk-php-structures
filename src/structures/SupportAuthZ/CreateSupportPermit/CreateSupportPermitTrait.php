<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\CreateSupportPermit;

trait CreateSupportPermitTrait
{
    /**
     * @param CreateSupportPermitRequest $args
     * @return CreateSupportPermitResponse
     */
    public function createSupportPermit(CreateSupportPermitRequest $args)
    {
        $result = parent::createSupportPermit($args->toArray());
        return new CreateSupportPermitResponse($result->toArray());
    }
}
